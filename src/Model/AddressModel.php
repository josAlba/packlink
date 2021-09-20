<?php

namespace packlink\Model;

use Symfony\Component\Serializer\Annotation\SerializedName;

class AddressModel
{
    /**
     * @var string
     * @Type("string")
     * @SerializedName("name")
     */
    private string $name;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("surname")
     */
    private string $surname;

    /**
     * @var string|null
     * @Type("string")
     * @SerializedName("company")
     */
    private ?string $company = null;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("street1")
     */
    private string $street1;

    /**
     * @var string|null
     * @Type("string")
     * @SerializedName("street2")
     */
    private ?string $street2 = null;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("zip_code")
     */
    private string $zipCode;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("city")
     */
    private string $city;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("state")
     */
    private string $state;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("country")
     */
    private string $country;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("phone")
     */
    private string $phone;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("email")
     */
    private string $email;

    public function getName(): string
    {
        return $this->name;
    }

    public function getSurname(): string
    {
        return $this->surname;
    }

    public function getCompany(): ?string
    {
        return $this->company;
    }

    public function getStreet1(): string
    {
        return $this->street1;
    }

    public function getStreet2(): ?string
    {
        return $this->street2;
    }

    public function getZipCode(): string
    {
        return $this->zipCode;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function getState(): string
    {
        return $this->state;
    }

    public function getCountry(): string
    {
        return $this->country;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setSurname(string $surname): void
    {
        $this->surname = $surname;
    }

    public function setCompany(?string $company): void
    {
        $this->company = $company;
    }

    public function setStreet1(string $street1): void
    {
        $this->street1 = $street1;
    }

    public function setStreet2(?string $street2): void
    {
        $this->street2 = $street2;
    }

    public function setZipCode(string $zipCode): void
    {
        $this->zipCode = $zipCode;
    }

    public function setCity(string $city): void
    {
        $this->city = $city;
    }

    public function setState(string $state): void
    {
        $this->state = $state;
    }

    public function setCountry(string $country): void
    {
        $this->country = $country;
    }

    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }
}