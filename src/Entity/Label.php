<?php

namespace App\Entity;


class Label
{
    /**
     * @var string|null
     *
     */
    private $tnt_account;

    /**
     * @var string|null
     *
     */
    private $sending_reference;

    /**
     * @var string|null
     *
     */
    private $sending_type;


    /**
     * @var string|null
     *
     */
    private $declared_value;

    /**
     * @var string|null
     *
     */
    private $company;

    /**
     * @var string|null
     *
     */
    private $code_recipient;

    /**
     * @var string|null
     *
     */
    private $name;

    /**
     * @var string|null
     *
     */
    private $address1;

    /**
     * @var string|null
     *
     */
    private $address2;

    /**
     * @var string|null
     *
     */
    private $address3_phone;

    /**
     * @var string|null
     *
     */
    private $postal_code;

    /**
     * @var string|null
     *
     */
    private $city;

    /**
     * @var string|null
     *
     */
    private $code_country;

    /**
     * @var string|null
     *
     */
    private $box_number;

    /**
     * @var string|null
     *
     */
    private $total_weight;

    /**
     * @var string|null
     *
     */
    private $zone;

    /**
     * @var string|null
     *
     */
    private $back_payment_value;

    /**
     * @var string|null
     *
     */
    private $date_expedition;

    /**
     * @var string|null
     *
     */
    private $name_expeditor;

    /**
     * @var string|null
     *
     */
    private $adr1_expeditor;

    /**
     * @var string|null
     *
     */
    private $adr2_expeditor;

    /**
     * @var string|null
     *
     */
    private $cp_expeditor;

    /**
     * @var string|null
     *
     */
    private $city_expeditor;

    /**
     * @var string|null
     *
     */
    private $country_expeditor;

    /**
     * @var string|null
     *
     */
    private $email;

    public function getTntAccount(): ?string
    {
        return $this->tnt_account;
    }

    public function setTntAccount(?string $tnt_account): self
    {
        $this->tnt_account = str_pad($this->tnt_account, 8);

        return $this;
    }

    public function getSendingReference(): ?string
    {
        return $this->sending_reference;
    }

    public function setSendingReference(?string $sending_reference): self
    {
        $this->sending_reference		= str_pad($sending_reference, 15);
  			$this->sending_reference		= substr($this->sending_reference, 0, 15);
        return $this;
    }

    public function getSendingType(): ?string
    {
        return $this->sending_type;
    }

    public function setSendingType(?string $sending_type): self
    {
        $this->sending_type = str_pad($sending_type, 1);

        return $this;
    }

    public function getDeclaredValue(): ?string
    {
        return $this->declared_value;
    }

    public function setDeclaredValue(?string $declared_value): self
    {
        $this->declared_value = str_pad($declared_value, 9);

        return $this;
    }

    public function getCompany(): ?string
    {
        return $this->company;
    }

    public function setCompany(?string $company): self
    {
        $this->company				= str_pad($company, 32);
        $this->company				= substr($this->company, 0, 32);

        return $this;
    }

    public function getCodeRecipient(): ?string
    {
        return $this->code_recipient;
    }

    public function setCodeRecipient(?string $code_recipient): self
    {
        $this->code_recipient		= str_pad($code_recipient, 10);
        $this->code_recipient		= substr($this->code_recipient, 0, 10);

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name =  str_pad($name, 30);

        return $this;
    }

    public function getAddress1(): ?string
    {
        return $this->address1;
    }

    public function setAddress1(?string $address1): self
    {
      $this->address1			= str_pad($address1, 32);
      $this->address1			= substr($this->address1, 0, 32);

      return $this;
    }

    public function getAddress2(): ?string
    {
        return $this->address2;
    }

    public function setAddress2(?string $address2): self
    {
        $this->address2			= str_pad($address2, 32);
        $this->address2			= substr($this->address2, 0, 32);

        return $this;
    }

    public function getAddress3Phone(): ?string
    {
        return $this->address3_phone;
    }

    public function setAddress3Phone(?string $address3_phone): self
    {
        $this->address3_phone =  str_pad($address3_phone, 30);

        return $this;
    }

    public function getPostalCode(): ?string
    {
        return $this->postal_code;
    }

    public function setPostalCode(?string $postal_code): self
    {
        if(strlen($postal_code) == 4)
        {
          $postal_code = str_pad($postal_code, 5, "0", STR_PAD_LEFT);
        }

        $this->postal_code = str_pad($this->postal_code, 10);

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): self
    {
        $this->city					= str_pad($city, 27);
  			$this->city					= substr($this->city, 0, 27);

        return $this;
    }

    public function getCodeCountry(): ?string
    {
        return $this->code_country;
    }

    public function setCodeCountry(?string $code_country): self
    {
        $this->code_country = str_pad($code_country, 2);

        return $this;
    }

    public function getProduct(): ?string
    {
        return $this->product;
    }

    public function setProduct(?string $product): self
    {
        $this->product = str_pad($product, 2);

        return $this;
    }

    public function getBoxNumber(): ?string
    {
        return $this->box_number;
    }

    public function setBoxNumber(?string $box_number): self
    {
        $this->box_number = str_pad($this->box_number, 2);

        return $this;
    }

    public function getTotalWeight(): ?string
    {
        return $this->total_weight;
    }

    public function setTotalWeight(?string $total_weight): self
    {
        $this->total_weight				= str_pad($total_weight, 6, "0", STR_PAD_LEFT);

        return $this;
    }


    /**
     * Get the value of Zone
     *
     * @return string|null
     */
    public function getZone()
    {
        return $this->zone;
    }

    /**
     * Set the value of Zone
     *
     * @param string $zone
     *
     * @return self
     */
    public function setZone(string $zone)
    {
        $this->zone = str_pad($zone, 25);

        return $this;
    }

    /**
     * Get the value of Back Payment Value
     *
     * @return string|null
     */
    public function getBackPaymentValue()
    {
        return $this->back_payment_value;
    }

    /**
     * Set the value of Back Payment Value
     *
     * @param string $back_payment_value
     *
     * @return self
     */
    public function setBackPaymentValue(string $back_payment_value)
    {
        $this->back_payment_value = str_pad($back_payment_value, 12);

        return $this;
    }

    /**
     * Get the value of Date Expedition
     *
     * @return string|null
     */
    public function getDateExpedition()
    {
        return $this->date_expedition;
    }

    /**
     * Set the value of Date Expedition
     *
     * @param string $date_expedition
     *
     * @return self
     */
    public function setDateExpedition(string $date_expedition)
    {
        $this->date_expedition = str_pad($date_expedition, 8);

        return $this;
    }

    /**
     * Get the value of Name Expeditor
     *
     * @return string|null
     */
    public function getNameExpeditor()
    {
        return $this->name_expeditor;
    }

    /**
     * Set the value of Name Expeditor
     *
     * @param string $name_expeditor
     *
     * @return self
     */
    public function setNameExpeditor(string $name_expeditor)
    {
        $this->name_expeditor = str_pad($name_expeditor, 32);

        return $this;
    }

    /**
     * Get the value of Adr Expeditor
     *
     * @return string|null
     */
    public function getAdr1Expeditor()
    {
        return $this->adr1_expeditor;
    }

    /**
     * Set the value of Adr Expeditor
     *
     * @param string $adr1_expeditor
     *
     * @return self
     */
    public function setAdr1Expeditor(string $adr1_expeditor)
    {
        $this->adr1_expeditor = str_pad($adr1_expeditor, 32);

        return $this;
    }

    /**
     * Get the value of Adr Expeditor
     *
     * @return string|null
     */
    public function getAdr2Expeditor()
    {
        return $this->adr2_expeditor;
    }

    /**
     * Set the value of Adr Expeditor
     *
     * @param string $adr2_expeditor
     *
     * @return self
     */
    public function setAdr2Expeditor(string $adr2_expeditor)
    {
        $this->adr2_expeditor = str_pad($adr2_expeditor, 32);

        return $this;
    }

    /**
     * Get the value of Cp Expeditor
     *
     * @return string|null
     */
    public function getCpExpeditor()
    {
        return $this->cp_expeditor;
    }

    /**
     * Set the value of Cp Expeditor
     *
     * @param string $cp_expeditor
     *
     * @return self
     */
    public function setCpExpeditor(string $cp_expeditor)
    {
        $this->cp_expeditor = str_pad($cp_expeditor, 10);

        return $this;
    }

    /**
     * Get the value of City Expeditor
     *
     * @return string|null
     */
    public function getCityExpeditor()
    {
        return $this->city_expeditor;
    }

    /**
     * Set the value of City Expeditor
     *
     * @param string $city_expeditor
     *
     * @return self
     */
    public function setCityExpeditor(string $city_expeditor)
    {
        $this->city_expeditor = str_pad($city_expeditor, 27);

        return $this;
    }

    /**
     * Get the value of Country Expeditor
     *
     * @return string|null
     */
    public function getCountryExpeditor()
    {
        return $this->country_expeditor;
    }

    /**
     * Set the value of Country Expeditor
     *
     * @param string $country_expeditor
     *
     * @return self
     */
    public function setCountryExpeditor(string $country_expeditor)
    {
        $this->country_expeditor = str_pad($country_expeditor, 2);

        return $this;
    }

    /**
     * Get the value of Email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of Email
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email)
    {
        $this->email = str_pad($email, 59);

        return $this;
    }



}
