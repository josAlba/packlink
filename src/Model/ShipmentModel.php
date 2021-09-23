<?php

namespace packlink\Model;

use JMS\Serializer\Annotation\Type;
use Symfony\Component\Serializer\Annotation\SerializedName;

class ShipmentModel
{
    public const STATE_IN_TRANSIT = 'IN_TRANSIT';
    public const STATE_READY_FOR_COLLECTION = 'READY_FOR_COLLECTION';

    /**
     * @var string
     * @Type("string")
     * @SerializedName("order_reference")
     */
    private string $orderReference;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("packlink_reference")
     */
    private string $packlinkReference;

    /**
     * @var string|null
     * @Type("string")
     * @SerializedName("parent_reference")
     */
    private ?string $parentReference = null;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("user_id")
     */
    private string $userId;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("client_id")
     */
    private string $clientId;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("platform")
     */
    private string $platform;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("platform_country")
     */
    private string $platformCountry;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("shipment_custom_reference")
     */
    private string $shipmentCustomReference;

    /**
     * @var AddressModel
     * @Type("packlink\Model\AddressModel")
     * @SerializedName("from")
     */
    private AddressModel $from;

    /**
     * @var AddressModel
     * @Type("packlink\Model\AddressModel")
     * @SerializedName("to")
     */
    private AddressModel $to;

    /**
     * @var PackagesModel
     * @Type("packlink\Model\PackagesModel")
     * @SerializedName("packages")
     */
    private PackagesModel $packages;

    /**
     * @var InsuranceModel
     * @Type("packlink\Model\InsuranceModel")
     * @SerializedName("insurance")
     */
    private InsuranceModel $insurance;

    /**
     * @var bool
     * @Type("boolean")
     * @SerializedName("priority")
     */
    private bool $priority;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("service_id")
     */
    private string $serviceId;

    /**
     * @var string|null
     * @Type("string")
     * @SerializedName("carrier_id")
     */
    private ?string $carrierId = null;

    /**
     * @var string|null
     * @Type("string")
     * @SerializedName("content")
     */
    private ?string $content = null;

    /**
     * @var float
     * @Type("float")
     * @SerializedName("contentvalue")
     */
    private float $contentvalue;

    /**
     * @var bool
     * @Type("bool")
     * @SerializedName("content_second_hand")
     */
    private bool $contentSecondHand;

    /**
     * @var string|null
     * @Type("string")
     * @SerializedName("dropoff_point_id")
     */
    private ?string $dropofPointId = null;

    /**
     * @var PriceModel
     * @Type("packlink\Model\PriceModel")
     * @SerializedName("price")
     */
    private PriceModel $price;

    /**
     * @var string|null
     * @Type("string")
     * @SerializedName("source")
     */
    private ?string $source = null;

    /**
     * @var string|null
     * @Type("string")
     * @SerializedName("state")
     */
    private ?string $state = null;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("order_date")
     */
    private string $orderDate;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("service")
     */
    private string $service;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("carrier")
     */
    private string $carrier;

    /**
     * @var string[]
     * @Type("array")
     * @SerializedName("trackings")
     */
    private array $trackings;

    /**
     * @var string|null
     * @Type("string")
     * @SerializedName("tracking_url")
     */
    private ?string $trackingUrl = null;

    /**
     * @var string|null
     * @Type("string")
     * @SerializedName("estimated_delivery_date")
     */
    private ?string $estimatedDeliveryDate = null;

    /**
     * @var string|null
     * @Type("string")
     * @SerializedName("carrier_product_id")
     */
    private ?string $carrierProductId = null;

    /**
     * @var string[]
     * @Type("array")
     * @SerializedName("labels")
     */
    private array $labels;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("currency")
     */
    private string $currency;

    public function getOrderReference(): string
    {
        return $this->orderReference;
    }

    public function setOrderReference(string $orderReference): void
    {
        $this->orderReference = $orderReference;
    }

    public function getPacklinkReference(): string
    {
        return $this->packlinkReference;
    }

    public function setPacklinkReference(string $packlinkReference): void
    {
        $this->packlinkReference = $packlinkReference;
    }

    public function getParentReference(): ?string
    {
        return $this->parentReference;
    }

    public function setParentReference(?string $parentReference): void
    {
        $this->parentReference = $parentReference;
    }

    public function getUserId(): string
    {
        return $this->userId;
    }

    public function setUserId(string $userId): void
    {
        $this->userId = $userId;
    }

    public function getClientId(): string
    {
        return $this->clientId;
    }

    public function setClientId(string $clientId): void
    {
        $this->clientId = $clientId;
    }

    public function getPlatform(): string
    {
        return $this->platform;
    }

    public function setPlatform(string $platform): void
    {
        $this->platform = $platform;
    }

    public function getPlatformCountry(): string
    {
        return $this->platformCountry;
    }

    public function setPlatformCountry(string $platformCountry): void
    {
        $this->platformCountry = $platformCountry;
    }

    public function getShipmentCustomReference(): string
    {
        return $this->shipmentCustomReference;
    }

    public function setShipmentCustomReference(string $shipmentCustomReference): void
    {
        $this->shipmentCustomReference = $shipmentCustomReference;
    }

    public function getFrom(): AddressModel
    {
        return $this->from;
    }

    public function setFrom(AddressModel $from): void
    {
        $this->from = $from;
    }

    public function getTo(): AddressModel
    {
        return $this->to;
    }

    public function setTo(AddressModel $to): void
    {
        $this->to = $to;
    }

    public function getPackages(): PackagesModel
    {
        return $this->packages;
    }

    public function setPackages(PackagesModel $packages): void
    {
        $this->packages = $packages;
    }

    public function getInsurance(): InsuranceModel
    {
        return $this->insurance;
    }

    public function setInsurance(InsuranceModel $insurance): void
    {
        $this->insurance = $insurance;
    }

    public function getPriority(): bool
    {
        return $this->priority;
    }

    public function setPriority(bool $priority): void
    {
        $this->priority = $priority;
    }

    public function getServiceId(): string
    {
        return $this->serviceId;
    }

    public function setServiceId(string $serviceId): void
    {
        $this->serviceId = $serviceId;
    }

    public function getCarrierId(): ?string
    {
        return $this->carrierId;
    }

    public function setCarrierId(?string $carrierId): void
    {
        $this->carrierId = $carrierId;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): void
    {
        $this->content = $content;
    }

    public function getContentvalue(): float
    {
        return $this->contentvalue;
    }

    public function setContentvalue(float $contentvalue): void
    {
        $this->contentvalue = $contentvalue;
    }

    public function getContentSecondHand(): float
    {
        return $this->contentSecondHand;
    }

    public function setContentSecondHand(float $contentSecondHand): void
    {
        $this->contentSecondHand = $contentSecondHand;
    }

    public function getDropofPointId(): ?string
    {
        return $this->dropofPointId;
    }

    public function setDropofPointId(?string $dropofPointId): void
    {
        $this->dropofPointId = $dropofPointId;
    }

    public function getPrice(): PriceModel
    {
        return $this->price;
    }

    public function setPrice(PriceModel $price): void
    {
        $this->price = $price;
    }

    public function getSource(): ?string
    {
        return $this->source;
    }

    public function setSource(?string $source): void
    {
        $this->source = $source;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(?string $state): void
    {
        $this->state = $state;
    }

    public function getOrderDate(): string
    {
        return $this->orderDate;
    }

    public function setOrderDate(string $orderDate): void
    {
        $this->orderDate = $orderDate;
    }

    public function getService(): string
    {
        return $this->service;
    }

    public function setService(string $service): void
    {
        $this->service = $service;
    }

    public function getCarrier(): string
    {
        return $this->carrier;
    }

    public function setCarrier(string $carrier): void
    {
        $this->carrier = $carrier;
    }

    /**
     * @return string[]
     */
    public function getTrackings(): array
    {
        return $this->trackings;
    }

    /**
     * @param string[] $trackings
     */
    public function setTrackings(array $trackings): void
    {
        $this->trackings = $trackings;
    }

    public function getTrackingUrl(): ?string
    {
        return $this->trackingUrl;
    }

    public function setTrackingUrl(?string $trackingUrl): void
    {
        $this->trackingUrl = $trackingUrl;
    }

    public function getEstimatedDeliveryDate(): ?string
    {
        return $this->estimatedDeliveryDate;
    }

    public function setEstimatedDeliveryDate(?string $estimatedDeliveryDate): void
    {
        $this->estimatedDeliveryDate = $estimatedDeliveryDate;
    }

    public function getCarrierProductId(): ?string
    {
        return $this->carrierProductId;
    }

    public function setCarrierProductId(?string $carrierProductId): void
    {
        $this->carrierProductId = $carrierProductId;
    }

    /**
     * @return string[]
     */
    public function getLabels(): array
    {
        return $this->labels;
    }

    /**
     * @param string[] $labels
     */
    public function setLabels(array $labels): void
    {
        $this->labels = $labels;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function setCurrency(string $currency): void
    {
        $this->currency = $currency;
    }
}