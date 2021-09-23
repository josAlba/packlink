<?php

namespace packlink\Model;

use JMS\Serializer\Annotation\Type;
use Symfony\Component\Serializer\Annotation\SerializedName;

class RequestAdditionalDataModel
{
    /**
     * @var string
     * @Type("string")
     * @SerializedName("postal_zone_id_from")
     */
    private string $postalZoneIdFrom;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("postal_zone_id_to")
     */
    private string $postalZoneIdTo;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("postal_zone_name_from")
     */
    private string $postalZoneNameFrom;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("postal_zone_name_to")
     */
    private string $postalZoneNameTo;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("zip_code_id_from")
     */
    private string $zipCodeIdFrom;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("zip_code_id_to")
     */
    private string $zipCodeIdTo;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("shippingServiceName")
     */
    private string $shippingServiceName;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("shippingServiceSelected")
     */
    private string $shippingServiceSelected;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("selectedWarehouseId")
     */
    private string $selectedWarehouseId;

    public function getShippingServiceSelected(): string
    {
        return $this->shippingServiceSelected;
    }

    public function setSelectedWarehouseId(string $selectedWarehouseId): void
    {
        $this->selectedWarehouseId = $selectedWarehouseId;
    }

    public function getSelectedWarehouseId(): string
    {
        return $this->selectedWarehouseId;
    }

    public function setShippingServiceSelected(string $shippingServiceSelected): void
    {
        $this->shippingServiceSelected = $shippingServiceSelected;
    }

    public function getShippingServiceName(): string
    {
        return $this->shippingServiceName;
    }

    public function setShippingServiceName(string $shippingServiceName): void
    {
        $this->shippingServiceName = $shippingServiceName;
    }

    public function getZipCodeIdTo(): string
    {
        return $this->zipCodeIdTo;
    }

    public function setZipCodeIdTo(string $zipCodeIdTo): void
    {
        $this->zipCodeIdTo = $zipCodeIdTo;
    }

    public function getZipCodeIdFrom(): string
    {
        return $this->zipCodeIdFrom;
    }

    public function setZipCodeIdFrom(string $zipCodeIdFrom): void
    {
        $this->zipCodeIdFrom = $zipCodeIdFrom;
    }

    public function getPostalZoneNameTo(): string
    {
        return $this->postalZoneNameTo;
    }

    public function setPostalZoneNameTo(string $postalZoneNameTo): void
    {
        $this->postalZoneNameTo = $postalZoneNameTo;
    }

    public function getPostalZoneNameFrom(): string
    {
        return $this->postalZoneNameFrom;
    }

    public function setPostalZoneNameFrom(string $postalZoneNameFrom): void
    {
        $this->postalZoneNameFrom = $postalZoneNameFrom;
    }

    public function getPostalZoneIdTo(): string
    {
        return $this->postalZoneIdTo;
    }

    public function setPostalZoneIdTo(string $postalZoneIdTo): void
    {
        $this->postalZoneIdTo = $postalZoneIdTo;
    }

    public function getPostalZoneIdFrom(): string
    {
        return $this->postalZoneIdFrom;
    }

    public function setPostalZoneIdFrom(string $postalZoneIdFrom): void
    {
        $this->postalZoneIdFrom = $postalZoneIdFrom;
    }
}