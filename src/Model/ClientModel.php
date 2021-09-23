<?php

namespace packlink\Model;

use JMS\Serializer\Annotation\Type;
use Symfony\Component\Serializer\Annotation\SerializedName;

class ClientModel
{
    /**
     * @var string
     * @Type("string")
     * @SerializedName("country")
     */
    private $country;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("platform")
     */
    private $platform;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("email")
     */
    private $email;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("address")
     */
    private $address;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("location")
     */
    private $location;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("phone")
     */
    private $phone;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("identifier")
     */
    private $identifier;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("name")
     */
    private $name;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("surname")
     */
    private $surname;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("state")
     */
    private $state;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("city")
     */
    private $city;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("language")
     */
    private $language;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("platform_country")
     */
    private $platformCountry;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("customer_type")
     */
    private $customerType;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("company_name")
     */
    private $companyName;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("postal_code")
     */
    private $postalCode;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("estimated_deliveries_volume")
     */
    private $estimatedDeliveriesVolume;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("tax_id")
     */
    private $taxId;

    /**
     * @var string[]
     * @Type("array")
     * @SerializedName("marketplaces")
     */
    private $marketplaces;

    /**
     * @var string[]
     * @Type("array")
     * @SerializedName("ecommerces")
     */
    private $ecommerces;

    /**
     * @var string[]
     * @Type("array")
     * @SerializedName("userIds")
     */
    private $userIds;

    public function getTaxId(): ?string
    {
        return $this->taxId;
    }

    public function setTaxId(?string $taxId): void
    {
        $this->taxId = $taxId;
    }

    public function getEstimatedDeliveriesVolume(): ?string
    {
        return $this->estimatedDeliveriesVolume;
    }

    public function setEstimatedDeliveriesVolume(?string $estimatedDeliveriesVolume): void
    {
        $this->estimatedDeliveriesVolume = $estimatedDeliveriesVolume;
    }

    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    public function setPostalCode(?string $postalCode): void
    {
        $this->postalCode = $postalCode;
    }

    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }

    public function setCompanyName(?string $companyName): void
    {
        $this->companyName = $companyName;
    }

    public function getCustomerType(): ?string
    {
        return $this->customerType;
    }

    public function setCustomerType(?string $customerType): void
    {
        $this->customerType = $customerType;
    }

    public function getPlatformCountry(): ?string
    {
        return $this->platformCountry;
    }

    public function setPlatformCountry(?string $platformCountry): void
    {
        $this->platformCountry = $platformCountry;
    }

    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function setLanguage(?string $language): void
    {
        $this->language = $language;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): void
    {
        $this->city = $city;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(?string $state): void
    {
        $this->state = $state;
    }

    public function getSurname(): ?string
    {
        return $this->surname;
    }

    public function setSurname(?string $surname): void
    {
        $this->surname = $surname;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(?string $country): void
    {
        $this->country = $country;
    }

    public function getPlatform(): ?string
    {
        return $this->platform;
    }

    public function setPlatform(?string $platform): void
    {
        $this->platform = $platform;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): void
    {
        $this->address = $address;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(?string $location): void
    {
        $this->location = $location;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): void
    {
        $this->phone = $phone;
    }

    public function getIdentifier(): ?string
    {
        return $this->identifier;
    }

    public function setIdentifier(?string $identifier): void
    {
        $this->identifier = $identifier;
    }

    public function getUserIds(): array
    {
        return $this->userIds;
    }

    /**
     * @param string[] $userIds
     */
    public function setUserIds(array $userIds): void
    {
        $this->userIds = $userIds;
    }

    public function getEcommerces(): array
    {
        return $this->ecommerces;
    }

    /**
     * @param string[] $ecommerce
     */
    public function setEcommerces(array $ecommerce): void
    {
        $this->ecommerces = $ecommerce;
    }

    public function getMarketplaces(): array
    {
        return $this->marketplaces;
    }

    /**
     * @param string[] $marketplaces
     */
    public function setMarketplaces(array $marketplaces): void
    {
        $this->marketplaces = $marketplaces;
    }
}