<?php
namespace App\Service;

use App\Entity\Label;

class ParcelTNTService
{
    public function transformSpreadsheetToArray($my_datas): array
    {
      $labels = array();
      //$row[0] = Raison sociale
      //$row[1] = nom prenom
      //$row[2] = adresse 1
      //$row[3] = adresse 2
      //$row[4] = adresse 3 / phone
      //$row[5] = code postal
      //$row[6] = ville
      //$row[7] = Nb carton
      //$row[8] = Poids total

      //Pour chaque ligne de tableau
      foreach ($my_datas as $row) {
          //création de l'entité - si le code postal est renseigné
          if($row[5] != ''){
            $label = new Label();
            $label->setCompany($row[0]);
            $label->setName($row[1]);
            $label->setAddress1($row[2]);
            $label->setAddress2($row[3]);
            $label->setAddress3Phone($row[4]);
            $label->setPostalCode($row[5]);
            $label->setCity($row[6]);
            $label->setBoxNumber($row[7]);
            $label->setTotalWeight($row[8]);

            $labels[] = $label;
          }
      }
      
      return $labels;
    }
}
