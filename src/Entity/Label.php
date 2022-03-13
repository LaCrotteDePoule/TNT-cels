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
        $this->tnt_account = $tnt_account;

        return $this;
    }

    public function getSendingReference(): ?string
    {
        return $this->sending_reference;
    }

    public function setSendingReference(?string $sending_reference): self
    {
        $this->sending_reference = $sending_reference;

        return $this;
    }

    public function getDeclaredValue(): ?string
    {
        return $this->declared_value;
    }

    public function setDeclaredValue(?string $declared_value): self
    {
        $this->declared_value = $declared_value;

        return $this;
    }

    public function getCompany(): ?string
    {
        return $this->company;
    }

    public function setCompany(?string $company): self
    {
        $this->company = $company;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getAddress1(): ?string
    {
        return $this->address1;
    }

    public function setAddress1(?string $address1): self
    {
        $this->address1 = $address1;

        return $this;
    }

    public function getAddress2(): ?string
    {
        return $this->address2;
    }

    public function setAddress2(?string $address2): self
    {
        $this->address2 = $address2;

        return $this;
    }

    public function getAddress3Phone(): ?string
    {
        return $this->address3_phone;
    }

    public function setAddress3Phone(?string $address3_phone): self
    {
        $this->address3_phone = $address3_phone;

        return $this;
    }

    public function getPostalCode(): ?string
    {
        return $this->postal_code;
    }

    public function setPostalCode(?string $postal_code): self
    {
        $this->postal_code = $postal_code;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getCodeCountry(): ?string
    {
        return $this->code_country;
    }

    public function setCodeCountry(?string $code_country): self
    {
        $this->code_country = $code_country;

        return $this;
    }

    public function getProduct(): ?string
    {
        return $this->product;
    }

    public function setProduct(?string $product): self
    {
        $this->product = $product;

        return $this;
    }

    public function getBoxNumber(): ?string
    {
        return $this->box_number;
    }

    public function setBoxNumber(?string $box_number): self
    {
        $this->box_number = $box_number;

        return $this;
    }

    public function getTotalWeight(): ?string
    {
        return $this->total_weight;
    }

    public function setTotalWeight(?string $total_weight): self
    {
        $this->total_weight = $total_weight;

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
     * @param string|null $zone
     *
     * @return self
     */
    public function setZone(string|null $zone)
    {
        $this->zone = $zone;

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
     * @param string|null $back_payment_value
     *
     * @return self
     */
    public function setBackPaymentValue(string|null $back_payment_value)
    {
        $this->back_payment_value = $back_payment_value;

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
     * @param string|null $date_expedition
     *
     * @return self
     */
    public function setDateExpedition(string|null $date_expedition)
    {
        $this->date_expedition = $date_expedition;

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
     * @param string|null $name_expeditor
     *
     * @return self
     */
    public function setNameExpeditor(string|null $name_expeditor)
    {
        $this->name_expeditor = $name_expeditor;

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
     * @param string|null $adr1_expeditor
     *
     * @return self
     */
    public function setAdr1Expeditor(string|null $adr1_expeditor)
    {
        $this->adr1_expeditor = $adr1_expeditor;

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
     * @param string|null $adr2_expeditor
     *
     * @return self
     */
    public function setAdr2Expeditor(string|null $adr2_expeditor)
    {
        $this->adr2_expeditor = $adr2_expeditor;

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
     * @param string|null $cp_expeditor
     *
     * @return self
     */
    public function setCpExpeditor(string|null $cp_expeditor)
    {
        $this->cp_expeditor = $cp_expeditor;

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
     * @param string|null $city_expeditor
     *
     * @return self
     */
    public function setCityExpeditor(string|null $city_expeditor)
    {
        $this->city_expeditor = $city_expeditor;

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
     * @param string|null $country_expeditor
     *
     * @return self
     */
    public function setCountryExpeditor(string|null $country_expeditor)
    {
        $this->country_expeditor = $country_expeditor;

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
     * @param string|null $email
     *
     * @return self
     */
    public function setEmail(string|null $email)
    {
        $this->email = $email;

        return $this;
    }



}
