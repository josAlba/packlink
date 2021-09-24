<?php

namespace packlink\Model;

use JMS\Serializer\Annotation\Type;
use Symfony\Component\Serializer\Annotation\SerializedName;

class UserModel
{
    /**
     * @var string
     * @Type("string")
     * @SerializedName("identifier")
     */
    private $identifier;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("client_id")
     */
    private $clientId;

    /**
     * @var string|null
     * @Type("string")
     * @SerializedName("name")
     */
    private $name;

    /**
     * @var string|null
     * @Type("string")
     * @SerializedName("surname")
     */
    private $surname;

    /**
     * @var string|null
     * @Type("string")
     * @SerializedName("email")
     */
    private $email;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("country")
     */
    private $country;

    /**
     * @var string|null
     * @Type("string")
     * @SerializedName("phone")
     */
    private $phone;

    /**
     * @var string|null
     * @Type("string")
     * @SerializedName("platform")
     */
    private $platform;

    /**
     * @var bool
     * @Type("bool")
     * @SerializedName("active")
     */
    private $active;

    /**
     * @var bool
     * @Type("bool")
     * @SerializedName("cancelled")
     */
    private $cancelled;

    /**
     * @var string|null
     * @Type("string")
     * @SerializedName("city")
     */
    private $city;

    /**
     * @var string|null
     * @Type("string")
     * @SerializedName("state")
     */
    private $state;

    /**
     * @var string|null
     * @Type("string")
     * @SerializedName("address")
     */
    private $address;

    /**
     * @var string|null
     * @Type("string")
     * @SerializedName("address2")
     */
    private $address2;

    public function getIdentifier(): string
    {
        return $this->identifier;
    }

    public function setIdentifier(string $identifier): void
    {
        $this->identifier = $identifier;
    }

    public function getClientId(): string
    {
        return $this->clientId;
    }

    public function setClientId(string $clientId): void
    {
        $this->clientId = $clientId;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function getSurname(): ?string
    {
        return $this->surname;
    }

    public function setSurname(?string $surname): void
    {
        $this->surname = $surname;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

    public function getCountry(): string
    {
        return $this->country;
    }

    public function setCountry(string $country): void
    {
        $this->country = $country;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): void
    {
        $this->phone = $phone;
    }

    public function getPlatform(): ?string
    {
        return $this->platform;
    }

    public function setPlatform(?string $platform): void
    {
        $this->platform = $platform;
    }

    public function getActive(): bool
    {
        return $this->active;
    }

    public function setActive(bool $active): void
    {
        $this->active = $active;
    }

    public function getCancelled(): bool
    {
        return $this->cancelled;
    }

    public function setCancelled(bool $cancelled): void
    {
        $this->cancelled = $cancelled;
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

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): void
    {
        $this->address = $address;
    }

    public function getAddress2(): ?string
    {
        return $this->address2;
    }

    public function setAddress2(?string $address2): void
    {
        $this->address2 = $address2;
    }
}