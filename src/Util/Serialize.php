<?php

namespace packlink\Util;

use JsonException;
use packlink\Model\ClientModel;
use packlink\Model\PackagingModel;
use packlink\Model\RequestShippingModel;
use packlink\Model\ShipmentModel;
use packlink\Model\TrackModel;
use packlink\Model\WarehousesModel;
use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class Serialize
{
    private const JSON = 'json';

    private Serializer $serializer;

    public function __construct()
    {
        $encoders = [new JsonEncoder()];
        $normalizers = [
            new ObjectNormalizer(null, null, null, new ReflectionExtractor()),
            new ArrayDenormalizer(),
            new GetSetMethodNormalizer()];
        $this->serializer = new Serializer($normalizers, $encoders);
    }

    public function serializeRequestShippingModel(RequestShippingModel $requestShippingModel): string
    {
        return $this->serializer->serialize($requestShippingModel, 'json');
    }

    public function deserializeShipmentModel(string $json): ShipmentModel
    {
        return $this->serializer->deserialize($json, ShipmentModel::class, self::JSON);
    }

    /**
     * @param string $json
     * @return TrackModel[]
     */
    public function deserializeShipmentTracks(string $json): array
    {
        return $this->serializer->deserialize($json, TrackModel::class . '[]', self::JSON);
    }

    /**
     * @param string $json
     * @return array
     * @throws JsonException
     */
    public function deserializeLabels(string $json): array
    {
        return json_decode($json, false, 512, JSON_THROW_ON_ERROR);
    }

    public function deserializeClientModel(string $json): ClientModel
    {
        return $this->serializer->deserialize($json, ClientModel::class, self::JSON);
    }

    /**
     * @param string $json
     * @return PackagingModel[]
     */
    public function deserializePackagingModel(string $json): array
    {
        return $this->serializer->deserialize($json, PackagingModel::class . '[]', self::JSON);
    }

    /**
     * @param string $json
     * @return WarehousesModel[]
     */
    public function deserializeWarehousesModel(string $json): array
    {
        return $this->serializer->deserialize($json, WarehousesModel::class . '[]', self::JSON);
    }
}