<?php

namespace packlink;

use Exception;
use GuzzleHttp\Exception\GuzzleException;
use packlink\Model\PostalCodeModel;
use packlink\Model\RequestShippingModel;
use packlink\Model\ResponseShippingModel;
use packlink\Model\ShipmentModel;
use packlink\Model\TrackModel;
use packlink\Util\Serialize;

class Shipping extends Packlink
{
    private Serialize $serialize;

    public function __construct(string $apiKey)
    {
        parent::__construct($apiKey);

        $this->serialize = new Serialize();
    }

    /**
     * @param string $reference
     * @return ShipmentModel|null
     * @throws GuzzleException
     */
    public function getShipment(string $reference): ?ShipmentModel
    {
        $response = $this->requestGet(Endpoint::ENDPOINT_SHIPMENTS . '/' . $reference);

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
        $response = $this->requestGet(Endpoint::ENDPOINT_SHIPMENTS . '/' . $reference . '/' . Endpoint::ENDPOINT_TRACKS);

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
        $response = $this->requestGet(Endpoint::ENDPOINT_SHIPMENTS . '/' . $reference . '/' . Endpoint::ENDPOINT_LABELS);

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
        $response = $this->requestPost(
            Endpoint::ENDPOINT_SHIPMENTS . Endpoint::ENDPOINT_CALLBACK,
            $body
        );

        return $response ?? null;
    }

    /**
     * @throws Exception
     */
    public function sendShipping(RequestShippingModel $shippingModel): ?ResponseShippingModel
    {
        $requestShippingModel = $this->serialize->serializeRequestShippingModel($shippingModel);

        if (empty($requestShippingModel)) {
            throw new Exception('serializer error');
        }

        $response = $this->requestPost(
            Endpoint::ENDPOINT_SHIPMENTS,
            $requestShippingModel
        );

        return $this->serialize->deserializeResponseShippingModel($response);
    }

    /**
     * @param string $postalCode
     * @param string $isoCode
     * @return PostalCodeModel|null
     * @throws GuzzleException
     */
    public function getPostalCodeModel(string $postalCode, string $isoCode): ?PostalCodeModel
    {
        $response = $this->requestGet(Endpoint::ENDPOINT_LOCATION . '/' . Endpoint::ENDPOINT_POSTALCODE . '/' . $isoCode . '/' . $postalCode);

        if ($response === null) {
            return null;
        }

        return $this->serialize->deserializePostalCode($response);
    }
}