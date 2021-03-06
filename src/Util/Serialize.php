<?php

namespace packlink\Util;

use Doctrine\Common\Annotations\AnnotationReader;
use packlink\Model\ClientModel;
use packlink\Model\PackagingModel;
use packlink\Model\PostalCodeModel;
use packlink\Model\RequestShippingModel;
use packlink\Model\ResponseShippingModel;
use packlink\Model\ShipmentModel;
use packlink\Model\TrackModel;
use packlink\Model\UserModel;
use packlink\Model\WarehousesModel;
use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory;
use Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader;
use Symfony\Component\Serializer\NameConverter\MetadataAwareNameConverter;
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
        $classMetadataFactory = new ClassMetadataFactory(new AnnotationLoader(new AnnotationReader()));
        $metadataAwareNameConverter = new MetadataAwareNameConverter($classMetadataFactory);

        $encoders = [new JsonEncoder()];
        $normalizers = [
            new ObjectNormalizer($classMetadataFactory, $metadataAwareNameConverter, null, new ReflectionExtractor()),
            new ArrayDenormalizer(),
            new GetSetMethodNormalizer()];
        $this->serializer = new Serializer($normalizers, $encoders);
    }

    /**
     * @param RequestShippingModel $requestShippingModel
     * @return string
     */
    public function serializeRequestShippingModel(RequestShippingModel $requestShippingModel): string
    {
        return $this->serializer->serialize($requestShippingModel, 'json');
    }

    /**
     * @param string $json
     * @return ResponseShippingModel
     */
    public function deserializeResponseShippingModel(string $json): ResponseShippingModel
    {
        return $this->serializer->deserialize($json, ResponseShippingModel::class, self::JSON);
    }

    /**
     * @param string $json
     * @return ShipmentModel
     */
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
     */
    public function deserializeLabels(string $json): array
    {
        return json_decode($json, false);
    }

    /**
     * @param string $json
     * @return ClientModel
     */
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

    /**
     * @param string $json
     * @return PostalCodeModel[]
     */
    public function deserializePostalCode(string $json): array
    {
        return $this->serializer->deserialize($json, PostalCodeModel::class . '[]', self::JSON);
    }

    /**
     * @param string $json
     * @return UserModel
     */
    public function deserializeUser(string $json): UserModel
    {
        return $this->serializer->deserialize($json, UserModel::class, self::JSON);
    }
}