<?php
// src/Controller/HomeController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use App\Service\ParcelTNTService;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home",)
     */
    public function publicHome()
    {
      return $this->render('layout.html.twig');
    }

    /**
     * @Route("/ajax/check-my-labels", name="check-my-labels",)
     */
    public function checkMyLabels(Request $request, ParcelTNTService $parcel_tnt_service)
    {
      $error_messages     = array();

      $my_datas           = $request->request->get('my_datas');
      $tnt_account        = $request->request->get('tnt_account');
      $sending_type       = $request->request->get('sending_type');
      $sending_reference  = $request->request->get('sending_reference');

      //le but est de construire un tableau d'objet
      $labels = $parcel_tnt_service->transformSpreadsheetToArray($my_datas);

      if($sending_reference == ''){
          $error_messages[] = "Veuiller renseigner une référence d'envoi !";
      }

      if(empty($labels)){
          $error_messages[] = 'Votre tableau ne contient aucune adresse valable !';
      }

      return $this->render('labels_resume.html.twig', [
        'labels'            => $labels,
        'tnt_account'       => $tnt_account,
        'sending_type'      => $sending_type,
        'sending_reference' => $sending_reference,
        'error_messages'    => $error_messages
      ]);
    }

    /**
     * @Route("/ajax/print-my-labels", name="print-my-labels",)
     */
    public function printMyLabels(Request $request, ParcelTNTService $parcel_tnt_service)
    {

      $my_datas           = $request->request->get('my_datas');
      $tnt_account        = $request->request->get('tnt_account');
      $sending_type       = $request->request->get('sending_type');
      $sending_reference  = $request->request->get('sending_reference');

      //le but est de construire un tableau d'objet
      $parcel_tnt_service->printMyLabels($my_datas, $tnt_account, $sending_type, $sending_reference);

      return $this->render('labels_printed.html.twig');
    }
}
