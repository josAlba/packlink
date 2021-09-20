<?php

namespace packlink\Model;

use Symfony\Component\Serializer\Annotation\SerializedName;

class PriceModel extends PriceBaseModel
{
    /**
     * @var PriceItemModel[]
     * @Type("array<packlink\Model\PriceItemModel>")
     * @SerializedName("items")
     */
    private array $items;

    /**
     * @return PriceItemModel[]
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param PriceItemModel[] $items
     */
    public function setItems(array $items): void
    {
        $this->items = $items;
    }
}