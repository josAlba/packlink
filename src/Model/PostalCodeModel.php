<?php

namespace packlink\Model;

use JMS\Serializer\Annotation\Type;
use Symfony\Component\Serializer\Annotation\SerializedName;

class PostalCodeModel
{
    /**
     * @var string
     * @Type("string")
     * @SerializedName("id")
     */
    private $id;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("zipcode")
     */
    private $zipcode;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("zipcodeCity")
     */
    private $zipcodeCity;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("latitude")
     */
    private $latitude;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("longitude")
     */
    private $longitude;

    /**
     * @var int
     * @Type("int")
     * @SerializedName("postalZoneId")
     */
    private $postalZoneId;

    /**
     * @var PostalZoneModel
     * @Type("packlink\Model\PostalZoneModel")
     * @SerializedName("postalZone")
     */
    private $postalZone;

    public function getPostalZone(): PostalZoneModel
    {
        return $this->postalZone;
    }

    public function setPostalZone(PostalZoneModel $postalZone): void
    {
        $this->postalZone = $postalZone;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function getZipcode(): string
    {
        return $this->zipcode;
    }

    public function setZipcode(string $zipcode): void
    {
        $this->zipcode = $zipcode;
    }

    public function getZipcodeCity(): string
    {
        return $this->zipcodeCity;
    }

    public function setZipcodeCity(string $zipcodeCity): void
    {
        $this->zipcodeCity = $zipcodeCity;
    }

    public function getLatitude(): string
    {
        return $this->latitude;
    }

    public function setLatitude(string $latitude): void
    {
        $this->latitude = $latitude;
    }

    public function getLongitude(): string
    {
        return $this->longitude;
    }

    public function setLongitude(string $longitude): void
    {
        $this->longitude = $longitude;
    }

    public function getPostalZoneId(): int
    {
        return $this->postalZoneId;
    }

    public function setPostalZoneId(int $postalZoneId): void
    {
        $this->postalZoneId = $postalZoneId;
    }
}