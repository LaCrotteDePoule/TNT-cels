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

    public function printMyLabels($my_datas, $tnt_account, $sending_type, $sending_reference): array
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

      /*
  	  *	@param	tnt_id					<string:8>		[obligatoire]	customer account
  	  *	@param	expedition_type			<string:1>		[obligatoire]	(C : colis, L : liaison, S : livraison samedi)
  	  *	@param	weight					<string:6>		[obligatoire]	XXXX.X (Ex : 00002.5 for 2.5 kg)
  	  *	@param	ref_recipient			<string:15>		[obligatoire]	Ref destinataire N° Client ou autre mais unique par expédition
  	  *	@param	declared_value			<string:9>						XXXXXXXXX (Ex : 000005000 for 5000)
  	  *	@param	quantity				<int:2>			[obligatoire]	number of parcel (between 1 & 99)
  	  *	@param	code_recipient			<string:10>		[obligatoire]	recipient search code
  	  *	@param	company					<string:32>		[obligatoire]	Nom ou raison social
  	  *	@param	address_1				<string:32>		[obligatoire]	Adresse 1
  	  *	@param	address_2				<string:32>						Adresse 2
  	  *	@param	code_postal				<string:10>		[obligatoire]	Code Postal
  	  *	@param	town					<string:27>		[obligatoire]	Ville
  	  *	@param	code_country			<string:2>		[obligatoire]	Norme ISO
  	  *	@param	product					<string:2>		[obligatoire]	(J : Express 13:00, A : Express 09:00, N : Express 08:00, JP : Express Payment 13:00, AP : Express Payment 09:00, ...)
  	  *	@param	instruction1			<string:30>						instruction text for shipping
  	  *	@param	instruction2			<string:30>						instruction text for shipping
  	  *	@param	zone					<string:25>						user zone
  	  *	@param	back_payment_value		<string:12>						XXXXXXXXXXXX.XX (Ex : 000015000.75 for 15000.75€)
  	  *	@param	date_expedition			<date:8>						Date expédition : SSAAMMJJ
  	  *	@param	name_expeditor			<string:32>		[obligatoire]	Expeditor name (if expeditor = customer then optional)
  	  *	@param	adr1_expeditor			<string:32>		[obligatoire]	Expeditor Adresse 1 (if expeditor = customer then optional)
  	  *	@param	adr2_expeditor			<string:32>		[obligatoire]	Expeditor Adresse 2 (if expeditor = customer then optional)
  	  *	@param	cp_expeditor			<string:10>		[obligatoire]	Expeditor Code Postal (if expeditor = customer then optional)
  	  *	@param	city_expeditor			<string:27>		[obligatoire]	Expeditor City (if expeditor = customer then optional)
  	  *	@param	country_expeditor		<string:2>		[obligatoire]	Norme ISO (if expeditor = customer then optional)
  	  *	@param	email					<string:59>						Mail. Notification if shipping type D or Z
  	  *
  	  */

      $csv_labels = fopen('tmp/file.csv', 'w');

        foreach ($labels as $label) {
            fputcsv($csv_labels, $label);
        }

        fclose($csv_labels);

      return $labels;
    }
}
