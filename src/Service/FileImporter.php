<?php

/**
 * Import file from any directory to a directory defined in service.yaml
 * Rename imported file to a human and simplified readable text
 */

namespace App\Service;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\String\Slugger\SluggerInterface;
use PhpOffice\PhpSpreadsheet\IOFactory;
use Psr\Log\LoggerInterface;

class FileImporter
{
    /**
     * path where file will imported
     * @var string
     */
    private $targetDirectory;

    /**
     * @var SluggerInterface
     */
    private $slugger;

    /**
     * Insert in log file
     * @var LoggerInterface
     */
    private $logger;

    public function __construct($targetDirectory, SluggerInterface $slugger, LoggerInterface $logger)
    {
        $this->targetDirectory = $targetDirectory;
        $this->slugger = $slugger;
        $this->logger = $logger;
    }
    
    /**
     * Upload file from a location to a target folder(public)
     * @param UploadedFile $file
     * @return string
     */
    private function import(UploadedFile $file): string
    {
        $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFilename = $this->slugger->slug($originalFilename);
        $fileName = $safeFilename.'.'.$file->guessExtension();
        try {
            $file->move($this->getTargetDirectory(), $fileName);
        } catch (FileException $e) {
            $this->logger->critical(
                "Erreur sur l'import du fichier",
                ['FileException'=>$e]
            );
        }
        return $fileName;
    }

    /**
     * Read from excel file and get contents
     * @param UploadedFile $file - file name
     * @param string $targetDirectory - location of folder where to put file
     * @return array contents of excel file
     */
    public function getExcelContents(UploadedFile $file)
    {
        $fileName = $this->import($file);
        $spreadsheet = IOFactory::load($this->targetDirectory . $fileName); 
        $row = $spreadsheet->getActiveSheet()->removeRow(1); // Remove first row (titles) 
        return $spreadsheet->getActiveSheet()->toArray(null, true, true, true);
    }


    /**
     * Get target location for imported files
     * @return string
     */
    public function getTargetDirectory()
    {
        return $this->targetDirectory;
    }
}
