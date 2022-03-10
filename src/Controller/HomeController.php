<?php
// src/Controller/HomeController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;

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
    public function checkMyLabels(Request $request)
    {
      $my_data = $request->request->get('my_datas');

      //le but est de construire un tableau d'objet
      $result  = array();

      //$row[0] = Raison sociale


      //Pour chaque ligne de tableau
      foreach ($my_data as $row) {
          //création de l'entité
      }

      return $this->render('layout.html.twig');
    }
}
