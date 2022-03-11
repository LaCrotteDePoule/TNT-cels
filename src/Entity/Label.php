<?php

namespace App\Entity;


class Label
{
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
    private $posal_code;

    /**
     * @var string|null
     *
     */
    private $city;

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
}
