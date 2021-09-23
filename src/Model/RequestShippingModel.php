<?php

namespace packlink\Model;

use JMS\Serializer\Annotation\Type;
use Symfony\Component\Serializer\Annotation\SerializedName;

class RequestShippingModel
{
    private const SOURCE = 'API Packlink';

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
     * @SerializedName("source")
     */
    private string $source;

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
     * @var string
     * @Type("string")
     * @SerializedName("service_id")
     */
    private string $serviceId;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("collection_date")
     */
    private string $collectionDate;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("collection_time")
     */
    private string $collectionTime;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("dropoff_point_id")
     */
    private string $dropoffPointId;

    /**
     * @var array
     * @Type("string")
     * @SerializedName("content")
     */
    private array $content;

    /**
     * @var float
     * @Type("string")
     * @SerializedName("contentvalue")
     */
    private float $contentValue;

    /**
     * @var bool
     * @Type("string")
     * @SerializedName("content_second_hand")
     */
    private bool $contentSecondHand;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("shipment_custom_reference")
     */
    private string $shipmentCustomReference;

    /**
     * @var bool
     * @Type("string")
     * @SerializedName("priority")
     */
    private bool $priority;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("contentValue_currency")
     */
    private string $contentValueCurrency;

    /**
     * @var RequestAdditionalDataModel
     * @Type("packlink\Model\RequestAdditionalDataModel")
     * @SerializedName("additionalData")
     */
    private RequestAdditionalDataModel $additionalData;

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
     * @var PackagesModel[]
     * @Type("array<packlink\Model\PackagesModel>")
     * @SerializedName("packages")
     */
    private array $packages;

    public function __construct()
    {
        $this->source = self::SOURCE;
        $this->contentSecondHand = false;
    }

    public function setContentValueCurrency(string $contentValueCurrency): void
    {
        $this->contentValueCurrency = $contentValueCurrency;
    }

    public function getContentValueCurrency(): string
    {
        return $this->contentValueCurrency;
    }

    public function setPriority(bool $priority): void
    {
        $this->priority = $priority;
    }

    public function getPriority(): bool
    {
        return $this->priority;
    }

    public function setShipmentCustomReference(string $shipmentCustomReference): void
    {
        $this->shipmentCustomReference = $shipmentCustomReference;
    }

    public function getShipmentCustomReference(): string
    {
        return $this->shipmentCustomReference;
    }

    public function setContentValue(float $contentValue): void
    {
        $this->contentValue = $contentValue;
    }

    public function getContentValue(): float
    {
        return $this->contentValue;
    }

    public function setContent(array $content): void
    {
        $this->content = $content;
    }

    public function getContent(): array
    {
        return $this->content;
    }

    public function setDropoffPointId(string $dropoffPointId): void
    {
        $this->dropoffPointId = $dropoffPointId;
    }

    public function getDropoffPointId(): string
    {
        return $this->dropoffPointId;
    }

    public function setCollectionTime(string $collectionTime): void
    {
        $this->collectionTime = $collectionTime;
    }

    public function getCollectionTime(): string
    {
        return $this->collectionTime;
    }

    public function setCollectionDate(string $collectionDate): void
    {
        $this->collectionDate = $collectionDate;
    }

    public function getCollectionDate(): string
    {
        return $this->collectionDate;
    }

    public function setServiceId(string $serviceId): void
    {
        $this->serviceId = $serviceId;
    }

    public function getServiceId(): string
    {
        return $this->serviceId;
    }

    public function setCarrier(string $carrier): void
    {
        $this->carrier = $carrier;
    }

    public function getCarrier(): string
    {
        return $this->carrier;
    }

    public function setService(string $service): void
    {
        $this->service = $service;
    }

    public function getService(): string
    {
        return $this->service;
    }

    public function setPlatformCountry(string $platformCountry): void
    {
        $this->platformCountry = $platformCountry;
    }

    public function getPlatformCountry(): string
    {
        return $this->platformCountry;
    }

    public function setPlatform(string $platform): void
    {
        $this->platform = $platform;
    }

    public function getPlatform(): string
    {
        return $this->platform;
    }

    public function setClientId(string $clientId): void
    {
        $this->clientId = $clientId;
    }

    public function getClientId(): string
    {
        return $this->clientId;
    }

    public function setUserId(string $userId): void
    {
        $this->userId = $userId;
    }

    public function getUserId(): string
    {
        return $this->userId;
    }

    public function setContentSecondHand(bool $contentSecondHand): void
    {
        $this->contentSecondHand = $contentSecondHand;
    }

    public function getContentSecondHand(): bool
    {
        return $this->contentSecondHand;
    }

    /**
     * @param PackagesModel[] $packages
     */
    public function setPackages(array $packages): void
    {
        $this->packages = $packages;
    }

    public function addPackages(PackagesModel $packages): void
    {
        $this->packages[] = $packages;
    }

    /**
     * @return PackagesModel[]
     */
    public function getPackages(): array
    {
        return $this->packages;
    }

    public function setTo(AddressModel $to): void
    {
        $this->to = $to;
    }

    public function getTo(): AddressModel
    {
        return $this->to;
    }

    public function setFrom(AddressModel $from): void
    {
        $this->from = $from;
    }

    public function getFrom(): AddressModel
    {
        return $this->from;
    }

    public function getAdditionalData(): RequestAdditionalDataModel
    {
        return $this->additionalData;
    }

    public function setAdditionalData(RequestAdditionalDataModel $additionalData): void
    {
        $this->additionalData = $additionalData;
    }

    public function getSource(): string
    {
        return $this->source;
    }

    public function setSource(string $source): void
    {
        $this->source = $source;
    }
}