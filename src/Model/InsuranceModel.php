<?php

namespace packlink\Model;

use JMS\Serializer\Annotation\Type;
use Symfony\Component\Serializer\Annotation\SerializedName;

class InsuranceModel
{
    /**
     * @var float
     * @Type("float")
     * @SerializedName("amount")
     */
    private float $amount;

    /**
     * @var bool
     * @Type("boolean")
     * @SerializedName("insurance_selected")
     */
    private bool $insuranceSelected;

    public function getAmount(): float
    {
        return $this->amount;
    }

    public function getInsuranceSelected(): bool
    {
        return $this->insuranceSelected;
    }

    public function setAmount(float $amount): void
    {
        $this->amount = $amount;
    }

    public function setInsuranceSelected(bool $selected): void
    {
        $this->insuranceSelected = $selected;
    }
}