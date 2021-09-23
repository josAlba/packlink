<?php

namespace packlink\Model;

use JMS\Serializer\Annotation\Type;
use Symfony\Component\Serializer\Annotation\SerializedName;

class PriceBaseModel
{
    /**
     * @var float
     * @Type("float")
     * @SerializedName("base_price")
     */
    private float $basePrice;

    /**
     * @var float
     * @Type("float")
     * @SerializedName("tax_price")
     */
    private float $taxPrice;

    /**
     * @var float
     * @Type("float")
     * @SerializedName("total_price")
     */
    private float $totalPrice;

    public function getBasePrice(): float
    {
        return $this->basePrice;
    }

    public function getTaxPrice(): float
    {
        return $this->taxPrice;
    }

    public function gettotalPrice(): float
    {
        return $this->totalPrice;
    }

    public function setBasePrice(float $basePrice): void
    {
        $this->basePrice = $basePrice;
    }

    public function setTaxPrice(float $taxPrice): void
    {
        $this->taxPrice = $taxPrice;
    }

    public function settotalPrice(float $totalPrice): void
    {
        $this->totalPrice = $totalPrice;
    }
}