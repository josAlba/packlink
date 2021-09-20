<?php

namespace packlink;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use JsonException;
use packlink\Model\ClientModel;
use packlink\Model\PackagingModel;
use packlink\Model\ShipmentModel;
use packlink\Model\TrackModel;
use packlink\Model\WarehousesModel;
use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class PacklinkClient
{
    private const JSON = 'json';

    private const ENDPOINT = 'https://api.packlink.com/';
    private const ENDPOINT_VERSION = 'v1/';

    private const ENDPOINT_CLIENT = 'clients';
    private const ENDPOINT_USERS = 'users';
    private const ENDPOINT_SHIPMENTS = 'shipments';

    private const ENDPOINT_PACKAGES = self::ENDPOINT_USERS . '/parcels';
    private const ENDPOINT_WAREHOUSES = self::ENDPOINT_CLIENT . '/warehouses';
    private const ENDPOINT_LABELS = '/labels';
    private const ENDPOINT_TRACKS = '/track';


    private string $apiKey;
    private Serializer $serializer;

    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;

        $encoders = [new JsonEncoder()];
        $normalizers = [
            new ObjectNormalizer(null, null, null, new ReflectionExtractor()),
            new ArrayDenormalizer(),
            new GetSetMethodNormalizer()];
        $this->serializer = new Serializer($normalizers, $encoders);
    }

    /**
     * @param string $endpoint
     * @return string|null
     * @throws GuzzleException
     */
    public function request(string $endpoint): ?string
    {
        $client = new Client();

        $request = $client->request(
            'GET',
            self::ENDPOINT . self::ENDPOINT_VERSION . $endpoint,
            [
                'headers' => [
                    'Authorization' => $this->apiKey
                ]
            ]
        );

        if ($request->getStatusCode() !== 200) {
            return null;
        }

        return $request->getBody();
    }

    /**
     * @return ClientModel|null
     * @throws GuzzleException
     */
    public function getClient(): ?ClientModel
    {
        $response = $this->request(self::ENDPOINT_CLIENT);

        if ($response === null) {
            return null;
        }

        return $this->serializer->deserialize($response, ClientModel::class, self::JSON);
    }

    /**
     * @return PackagingModel[]|null
     * @throws GuzzleException
     */
    public function getPackages(): ?array
    {
        $response = $this->request(self::ENDPOINT_PACKAGES);

        if ($response === null) {
            return null;
        }

        return $this->serializer->deserialize($response, PackagingModel::class . '[]', self::JSON);
    }

    /**
     * @return WarehousesModel[]|null
     * @throws GuzzleException
     */
    public function getWarehouses(): ?array
    {
        $response = $this->request(self::ENDPOINT_WAREHOUSES);

        if ($response === null) {
            return null;
        }

        return $this->serializer->deserialize($response, WarehousesModel::class . '[]', self::JSON);
    }

    /**
     * @param string $reference
     * @return ShipmentModel|null
     * @throws GuzzleException
     */
    public function getShipment(string $reference): ?ShipmentModel
    {
        $response = $this->request(self::ENDPOINT_SHIPMENTS . '/' . $reference);

        if ($response === null) {
            return null;
        }

        return $this->serializer->deserialize($response, ShipmentModel::class, self::JSON);
    }

    /**
     * @param string $reference
     * @return array|null
     * @throws GuzzleException
     */
    public function getShipmentTracks(string $reference): ?array
    {
        $response = $this->request(self::ENDPOINT_SHIPMENTS . '/' . $reference . '/' . self::ENDPOINT_TRACKS);

        if ($response === null) {
            return null;
        }

        return $this->serializer->deserialize($response, TrackModel::class . '[]', self::JSON);
    }

    /**
     * @param string $reference
     * @return array|null
     * @throws GuzzleException
     * @throws JsonException
     */
    public function getLabels(string $reference): ?array
    {
        $response = $this->request(self::ENDPOINT_SHIPMENTS . '/' . $reference . '/' . self::ENDPOINT_LABELS);

        if ($response === null) {
            return null;
        }

        return json_decode($response, false, 512, JSON_THROW_ON_ERROR);
    }
}