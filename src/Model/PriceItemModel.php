<?php

namespace packlink\Model;

use Symfony\Component\Serializer\Annotation\SerializedName;

class PriceItemModel extends PriceBaseModel
{
    /**
     * @var string
     * @Type("string")
     * @SerializedName("concept")
     */
    private string $concept;

    public function getConcept(): string
    {
        return $this->concept;
    }

    public function setConcept(string $concept): void
    {
        $this->concept = $concept;
    }
}