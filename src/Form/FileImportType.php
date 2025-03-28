<?php

namespace App\Form;

use App\Entity\Annonces;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

class FileImportType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('file', FileType::class, [
            'label'=>'Importation Fichier',
            'required'=>true,
            'attr' => ['class'=>'form-control'],
            'constraints' => [
                new File([ 
                  'mimeTypes' => [
                    'application/vnd.ms-excel', 
                    'application/excel', 
                    'application/vnd.msexcel', 
                    'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'
                  ],
                  'mimeTypesMessage' => "This document isn't valid.",
                ])
              ],
            ])
        ->add('save', SubmitType::class);
    }
}
