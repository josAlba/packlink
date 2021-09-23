<?php

namespace packlink\Model;

use JMS\Serializer\Annotation\Type;
use Symfony\Component\Serializer\Annotation\SerializedName;

class WarehousesModel
{
    /**
     * @var string
     * @Type("string")
     * @SerializedName("id")
     */
    private string $id;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("alias")
     */
    private string $alias;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("name")
     */
    private string $name;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("country")
     */
    private string $country;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("city")
     */
    private string $city;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("postal_code")
     */
    private string $postalCode;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("address")
     */
    private string $address;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("phone")
     */
    private string $phone;

    /**
     * @var string|null
     * @Type("string")
     * @SerializedName("company")
     */
    private ?string $company = null;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("surname")
     */
    private string $surname;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("email")
     */
    private string $email;

    /**
     * @var bool
     * @Type("boolean")
     * @SerializedName("default_selection")
     */
    private bool $defaultSelection;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("updated_at")
     */
    private string $createdAt;

    public function getId(): string
    {
        return $this->id;
    }

    public function getAlias(): string
    {
        return $this->alias;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getCountry(): string
    {
        return $this->country;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function getPostalCode(): string
    {
        return $this->postalCode;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function getCompany(): ?string
    {
        return $this->company;
    }

    public function getSurname(): string
    {
        return $this->surname;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getDefaultSelection(): bool
    {
        return $this->defaultSelection;
    }

    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function setAlias(string $alias): void
    {
        $this->alias = $alias;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setCountry(string $country): void
    {
        $this->country = $country;
    }

    public function setCity(string $city): void
    {
        $this->city = $city;
    }

    public function setPostalCode(string $postalCode): void
    {
        $this->postalCode = $postalCode;
    }

    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }

    public function setCompany(?string $company): void
    {
        $this->company = $company;
    }

    public function setSurname(string $surname): void
    {
        $this->surname = $surname;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function setDefaultSelection(bool $defaultSelection): void
    {
        $this->defaultSelection = $defaultSelection;
    }

    public function setCreatedAt(string $createdAt): void
    {
        $this->createdAt = $createdAt;
    }
}