<?php

namespace packlink\Model;

use Symfony\Component\Serializer\Annotation\SerializedName;

class PackagesModel
{
    /**
     * @var float
     * @Type("float")
     * @SerializedName("width")
     */
    private float $width;

    /**
     * @var float
     * @Type("float")
     * @SerializedName("height")
     */
    private float $height;

    /**
     * @var float
     * @Type("float")
     * @SerializedName("length")
     */
    private float $length;

    /**
     * @var float
     * @Type("float")
     * @SerializedName("weight")
     */
    private float $weight;

    public function getWidth(): float
    {
        return $this->width;
    }

    public function getHeight(): float
    {
        return $this->height;
    }

    public function getLength(): float
    {
        return $this->length;
    }

    public function getWeight(): float
    {
        return $this->weight;
    }

    public function setWidth(float $width): void
    {
        $this->width = $width;
    }

    public function setHeight(float $height): void
    {
        $this->height = $height;
    }

    public function setLength(float $length): void
    {
        $this->length = $length;
    }

    public function setWeight(float $weight): void
    {
        $this->weight = $weight;
    }
}