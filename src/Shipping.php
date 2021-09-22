<?php

namespace packlink;

use Exception;
use GuzzleHttp\Exception\GuzzleException;
use packlink\Model\RequestShippingModel;
use packlink\Model\ShipmentModel;
use packlink\Model\TrackModel;
use packlink\Util\Serialize;

class Shipping
{
    private Packlink $packlink;
    private Serialize $serialize;

    public function __construct(string $apiKey)
    {
        $this->packlink = new Packlink($apiKey);
        $this->serialize = new Serialize();
    }

    /**
     * @param string $reference
     * @return ShipmentModel|null
     * @throws GuzzleException
     */
    public function getShipment(string $reference): ?ShipmentModel
    {
        $response = $this->packlink->requestGet(Endpoint::ENDPOINT_SHIPMENTS . '/' . $reference);

        if ($response === null) {
            return null;
        }

        return $this->serialize->deserializeShipmentModel($response);
    }

    /**
     * @param string $reference
     * @return TrackModel[]|null
     * @throws GuzzleException
     */
    public function getShipmentTracks(string $reference): ?array
    {
        $response = $this->packlink->requestGet(Endpoint::ENDPOINT_SHIPMENTS . '/' . $reference . '/' . Endpoint::ENDPOINT_TRACKS);

        if ($response === null) {
            return null;
        }

        return $this->serialize->deserializeShipmentTracks($response);
    }

    /**
     * @param string $reference
     * @return array|null
     * @throws GuzzleException
     * @throws \JsonException
     */
    public function getLabels(string $reference): ?array
    {
        $response = $this->packlink->requestGet(Endpoint::ENDPOINT_SHIPMENTS . '/' . $reference . '/' . Endpoint::ENDPOINT_LABELS);

        if ($response === null) {
            return null;
        }

        return $this->serialize->deserializeLabels($response);
    }

    /**
     * @param string $url
     * @return string|null
     * @throws \JsonException
     * @throws Exception
     */
    public function setCallbackShipping(string $url): ?string
    {
        $body = json_encode(['url' => $url], JSON_THROW_ON_ERROR);
        $response = $this->packlink->requestPost(
            Endpoint::ENDPOINT_SHIPMENTS . Endpoint::ENDPOINT_CALLBACK,
            $body
        );

        return $response ?? null;
    }

    /**
     * @throws Exception
     */
    public function sendShipping(RequestShippingModel $shippingModel): ?string
    {
        $requestShippingModel = $this->serialize->serializeRequestShippingModel($shippingModel);

        if (empty($requestShippingModel)) {
            throw new Exception('serializer error');
        }

        return $this->packlink->requestPost(
            Endpoint::ENDPOINT_SHIPMENTS,
            $requestShippingModel
        );
    }
}