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
      $i = 1;

      // if(empty($this->tnt_id))								{ $error[] = "tnt_id";			}
  		// elseif(   (strtolower($this->expedition_type) != "c")
  		// 	   && (strtolower($this->expedition_type) != "l")
  		// 	   && (strtolower($this->expedition_type) != "s") )			{ $error[] = "expedition_type";	}
  		// elseif(empty($this->weight))							{ $error[] = "weight";			}
  		// elseif(empty($this->ref_recipient))						{ $error[] = "ref_recipient";	}
  		// elseif(empty($this->quantity))							{ $error[] = "quantity";		}
  		// elseif(empty($this->code_recipient))					{ $error[] = "code_recipient";	}
  		// elseif(empty($this->company))							{ $error[] = "company";			}
  		// elseif(empty($this->address_1))							{ $error[] = "address_1";		}
  		// elseif(empty($this->code_postal))						{ $error[] = "code_postal";		}
  		// elseif(empty($this->town))								{ $error[] = "town";			}
  		// elseif(empty($this->code_country))						{ $error[] = "code_country";	}
  		// elseif(empty($this->product))							{ $error[] = "product";			};

      //Pour chaque ligne de tableau
      foreach ($my_datas as $row) {
          //création de l'entité - si le code postal est renseigné
          if($row[5] != ''){
            $label = new Label();
            $label->setTntAccount($tnt_account);
            $label->setSendingType($sending_type);
            $label->setTotalWeight($row[8]);
            $label->setSendingReference($sending_reference);
            $label->setDeclaredValue('');
            $label->setBoxNumber($row[7]);
            $label->setCodeRecipient($i);
            $label->setCompany($row[0]);
            $label->setAddress1($row[2]);
            $label->setAddress2($row[3]);
            $label->setPostalCode($row[5]);
            $label->setCity($row[6]);
            $label->setCodeCountry('FR');
            $label->setProduct('J');
            $label->setName($row[1]);
            $label->setAddress3Phone($row[4]);
            $label->setZone('');
            $label->setBackPaymentValue('');
            $label->setDateExpedition('');
            $label->setNameExpeditor('');
            $label->setAdr1Expeditor('');
            $label->setAdr2Expeditor('');
            $label->setCpExpeditor('');
            $label->setCityExpeditor('');
            $label->setCountryExpeditor('');
            $label->setEmail('');

            $labels[] = $label;
            $i++;
          }
      }
      dd($labels);
      $csv_labels = fopen('tmp/file.csv', 'w');

      foreach ($labels as $label) {
    			fputs($csv_labels, $label->getTntAccount().$label->getSendingType().$label->getTotalWeight().$label->getSendingReference().$label->getDeclaredValue().$label->getBoxNumber().$label->getCodeRecipient().$label->getCompany().$label->getAddress1().$label->getAddress2().$label->getPostalCode().$label->getCity().$label->getCodeCountry().$label->getProduct().$label->getName().$label->getAddress3Phone().$label->getZone().$label->getBackPaymentValue().$label->getDateExpedition().$label->getNameExpeditor().$label->getAdr1Expeditor().$label->getAdr2Expeditor().$label->getCpExpeditor().$label>getCityExpeditor().$label->getCountryExpeditor().$label->getEmail()."\r\n");
      }

      fclose($csv_labels);

      return $labels;
    }
}
