<?php
// src/Controller/FileImportController.php

namespace App\Controller;

//use App\Entity\Customer;

use App\Entity\Customer;
use App\Form\FileImportType;
use App\Service\FileImporter;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CustomerController extends AbstractController
{
    public function __construct(private ManagerRegistry $doctrine) {}

    /**
     * @Route("/excel-import", name="file_import")
     */
    public function import(Request $request, FileImporter $fileImporter)
    {
        $form = $this->createForm(FileImportType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $form->get('file')->getData();
            $rows = $fileImporter->getExcelContents($file);

            $entityManager = $this->doctrine->getManager();

            foreach ($rows as $data) {
                $business_account = $data['A'];
                $event_account = $data['B'];
                $last_event_account = $data['C'];
                $card_number = $data['D'];
                $civility = $data['E'];
                $current_owner = $data['F'];
                $last_name = $data['G'];
                $first_name = $data['H'];
                $street_identity = $data['I'];
                $additionnal_address = $data['J'];
                $zip_code = $data['K'];
                $city = $data['L'];
                $home_phone = $data['M'];
                $mobile_phone = $data['N'];
                $job_phone = $data['O'];
                $email = $data['P'];
                $release_date = date_create(date('m/d/Y',strtotime($data['Q'])));
                $purchase_date = date_create(date('m/d/Y', strtotime($data['R'])));
                $last_event_date = date_create(date('m/d/Y',strtotime($data['S'])));
                $brand_name = $data['T'];
                $model_name = $data['U'];
                $version = $data['V'];
                $vin = $data['W'];
                $registration = $data['X'];
                $lead_type = $data['Y'];
                $mileage = $data['Z'];
                $engine_name = $data['AA'];
                $seller = $data['AB'];
                $seller_vo = $data['AC'];
                $billing_comment = $data['AD'];
                $vn_vo_type = $data['AE'];
                $vn_vo_number = $data['AF'];
                $intermediary = $data['AG'];
                $event_date = date_create(date('m/d/Y', strtotime($data['AH'])));
                $event_origin = $data['AI'];

                $customer = new Customer();

                $customer->setBusinessAccount($business_account);
                $customer->setEventAccount($event_account);
                $customer->setLastEventAccount($last_event_account);
                $customer->setCivility($civility);
                $customer->setCurrentOwnerName($current_owner);
                $customer->setLastName($last_name);
                $customer->setFirstName($first_name);
                $customer->setStreetIdentity($street_identity);
                $customer->setAdditionnalAdress($additionnal_address);
                $customer->setZipCode($zip_code);
                $customer->setCity($city);
                $customer->setHomePhone($home_phone);
                $customer->setMobilePhone($mobile_phone);
                $customer->setJobPhone($job_phone);
                $customer->setEmail($email);
                $customer->setReleaseDate($release_date);
                $customer->setPurchaseDate($purchase_date);
                $customer->setLastEventDate($last_event_date);
                $customer->setBrandName($brand_name);
                $customer->setModelName($model_name);
                $customer->setVersion($version);
                $customer->setVin($vin);
                $customer->setRegistration($registration);
                $customer->setLeadType($lead_type);
                $customer->setMileage($mileage);
                $customer->setEngineName($engine_name);
                $customer->setSeller($seller);
                $customer->setSellerVO($seller_vo);
                $customer->setBillingComment($billing_comment);
                $customer->setVnvoType($vn_vo_type);
                $customer->setVnvoNumber($vn_vo_number);
                $customer->setIntermediary($intermediary);
                $customer->setEventDate($event_date);
                $customer->setEventOrigin($event_origin);

                $entityManager->persist($customer);
            }

            $entityManager->flush();

            return new Response("Le fichier est importé avec succès."); 

        }

        return $this->render('uploads/import.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}