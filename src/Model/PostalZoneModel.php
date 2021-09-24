<?php

namespace packlink\Model;

use JMS\Serializer\Annotation\Type;
use Symfony\Component\Serializer\Annotation\SerializedName;

class PostalZoneModel
{
    /**
     * @var string
     * @Type("string")
     * @SerializedName("id")
     */
    private $id;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("name")
     */
    private $name;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("isoCode")
     */
    private $isoCode;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("phonePrefix")
     */
    private $phonePrefix;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void{
        $this->name = $name;
    }

    public function getIsoCode(): string
    {
        return $this->isoCode;
    }

    public function setIsoCode(string $isoCode): void
    {
        $this->isoCode = $isoCode;
    }

    public function getPhonePrefix(): string
    {
        return $this->phonePrefix;
    }

    public function setPhonePrefix(string $phonePrefix): void
    {
        $this->phonePrefix = $phonePrefix;
    }
}