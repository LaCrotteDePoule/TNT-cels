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
      $my_datas = $request->request->get('my_datas');

      //le but est de construire un tableau d'objet
      $labels = $parcel_tnt_service->transformSpreadsheetToArray($my_datas);

      return $this->render('labels_resume.html.twig', [
        'labels' => $labels
      ]);
    }

    /**
     * @Route("/ajax/print-my-labels", name="print-my-labels",)
     */
    public function printMyLabels(Request $request)
    {

      return $this->render('labels_resume.html.twig');
    }
}
