<?php

namespace packlink\Model;

use Symfony\Component\Serializer\Annotation\SerializedName;

class TrackModel
{
    /**
     * @var int
     * @Type("integer")
     * @SerializedName("timestamp")
     */
    private int $timestamp;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("description")
     */
    private string $description;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("status_code")
     */
    private string $statusCode;

    public function getTimestamp(): int
    {
        return $this->timestamp;
    }

    public function setTimestamp(int $timestamp): void
    {
        $this->timestamp = $timestamp;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getStatusCode(): string
    {
        return $this->statusCode;
    }

    public function setStatusCode(string $statusCode): void
    {
        $this->statusCode = $statusCode;
    }
}