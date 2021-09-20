<?php

namespace packlink\Model;

use Symfony\Component\Serializer\Annotation\SerializedName;

class ClientModel
{
    /**
     * @var string|null
     * @Type("string")
     * @SerializedName("country")
     */
    private ?string $country = null;

    /**
     * @var string|null
     * @Type("string")
     * @SerializedName("platform")
     */
    private ?string $platform = null;

    /**
     * @var string|null
     * @Type("string")
     * @SerializedName("email")
     */
    private ?string $email = null;

    /**
     * @var string|null
     * @Type("string")
     * @SerializedName("address")
     */
    private ?string $address = null;

    /**
     * @var string|null
     * @Type("string")
     * @SerializedName("location")
     */
    private ?string $location = null;

    /**
     * @var string|null
     * @Type("string")
     * @SerializedName("phone")
     */
    private ?string $phone = null;

    /**
     * @var string|null
     * @Type("string")
     * @SerializedName("identifier")
     */
    private ?string $identifier = null;

    /**
     * @var string|null
     * @Type("string")
     * @SerializedName("name")
     */
    private ?string $name = null;

    /**
     * @var string|null
     * @Type("string")
     * @SerializedName("surname")
     */
    private ?string $surname = null;

    /**
     * @var string|null
     * @Type("string")
     * @SerializedName("state")
     */
    private ?string $state = null;

    /**
     * @var string|null
     * @Type("string")
     * @SerializedName("city")
     */
    private ?string $city = null;

    /**
     * @var string|null
     * @Type("string")
     * @SerializedName("language")
     */
    private ?string $language = null;

    /**
     * @var string|null
     * @Type("string")
     * @SerializedName("platform_country")
     */
    private ?string $platformCountry = null;

    /**
     * @var string|null
     * @Type("string")
     * @SerializedName("customer_type")
     */
    private ?string $customerType = null;

    /**
     * @var string|null
     * @Type("string")
     * @SerializedName("company_name")
     */
    private ?string $companyName = null;

    /**
     * @var string|null
     * @Type("string")
     * @SerializedName("postal_code")
     */
    private ?string $postalCode = null;

    /**
     * @var string|null
     * @Type("string")
     * @SerializedName("estimated_deliveries_volume")
     */
    private ?string $estimatedDeliveriesVolume = null;

    /**
     * @var string|null
     * @Type("string")
     * @SerializedName("tax_id")
     */
    private ?string $taxId = null;

    /**
     * @var string[]
     * @Type("array")
     * @SerializedName("marketplaces")
     */
    private array $marketplaces;

    /**
     * @var string[]
     * @Type("array")
     * @SerializedName("ecommerces")
     */
    private array $ecommerces;

    /**
     * @var string[]
     * @Type("array")
     * @SerializedName("userIds")
     */
    private array $userIds;

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