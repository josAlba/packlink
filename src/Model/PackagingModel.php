<?php

namespace packlink\Model;

use JMS\Serializer\Annotation\Type;
use Symfony\Component\Serializer\Annotation\SerializedName;

class PackagingModel
{
    /**
     * @var string
     * @Type("string")
     * @SerializedName("id")
     */
    private string $id;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("name")
     */
    private string $name;

    /**
     * @var float
     * @Type("float")
     * @SerializedName("weight")
     */
    private float $weight;

    /**
     * @var float
     * @Type("float")
     * @SerializedName("length")
     */
    private float $length;

    /**
     * @var float
     * @Type("float")
     * @SerializedName("height")
     */
    private float $height;

    /**
     * @var float
     * @Type("float")
     * @SerializedName("width")
     */
    private float $width;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("created_at")
     */
    private string $createdAt;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("updated_at")
     */
    private string $updatedAt;

    /**
     * @var bool
     * @Type("boolean")
     * @SerializedName("default")
     */
    private bool $default;

    public function getId(): string
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getWeight(): float
    {
        return $this->weight;
    }

    public function getLength(): float
    {
        return $this->length;
    }

    public function getHeight(): float
    {
        return $this->height;
    }

    public function getWidth(): float
    {
        return $this->width;
    }

    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }

    public function getUpdatedAt(): string
    {
        return $this->updatedAt;
    }

    public function getDefault(): string
    {
        return $this->default;
    }

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setWeight(float $weight): void
    {
        $this->weight = $weight;
    }

    public function setLength(float $length): void
    {
        $this->length = $length;
    }

    public function setHeight(float $height): void
    {
        $this->height = $height;
    }

    public function setWidth(float $width): void
    {
        $this->width = $width;
    }

    public function setCreatedAt(string $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    public function setUpdatedAt(string $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    public function setDefault(string $default): void
    {
        $this->default = $default;
    }
}