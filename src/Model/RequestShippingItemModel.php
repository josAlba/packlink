<?php

namespace packlink\Model;

use JMS\Serializer\Annotation\Type;
use Symfony\Component\Serializer\Annotation\SerializedName;

class RequestShippingItemModel
{
    /**
     * @var float
     * @Type("float")
     * @SerializedName("price")
     */
    public float $price;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("title")
     */
    public string $title;


    /**
     * @var string
     * @Type("string")
     * @SerializedName("picture_url")
     */
    public string $pictureUrl;

    /**
     * @var int
     * @Type("int")
     * @SerializedName("quantity")
     */
    public $quantity;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("category_name")
     */
    public $categoryName;

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setDescription(string $title): void
    {
        $this->title = $title;
    }

    public function getPictureUrl(): string
    {
        return $this->pictureUrl;
    }

    public function setPictureUrl(string $pictureUrl): void
    {
        $this->pictureUrl = $pictureUrl;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): void
    {
        $this->quantity = $quantity;
    }

    public function getCategoryName(): string
    {
        return $this->categoryName;
    }

    public function setCategoryName(string $categoryName): void
    {
        $this->categoryName = $categoryName;
    }
}
