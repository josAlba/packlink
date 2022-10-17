<?php

namespace packlink;

use GuzzleHttp\Exception\GuzzleException;
use packlink\Model\ClientModel;
use packlink\Model\PackagingModel;
use packlink\Model\UserModel;
use packlink\Model\WarehousesModel;
use packlink\Util\Serialize;

class User extends Packlink
{
    private Serialize $serialize;

    public function __construct(string $apiKey)
    {
        parent::__construct($apiKey);

        $this->serialize = new Serialize();
    }

    /**
     * @return ClientModel|null
     * @throws GuzzleException
     */
    public function getClient(): ?ClientModel
    {
        $response = $this->requestGet(Endpoint::ENDPOINT_CLIENT);

        if ($response === null) {
            return null;
        }

        return $this->serialize->deserializeClientModel($response);
    }

    /**
     * @return PackagingModel[]|null
     * @throws GuzzleException
     */
    public function getPackages(): ?array
    {
        $response = $this->requestGet(Endpoint::ENDPOINT_PACKAGES);

        if ($response === null) {
            return [];
        }

        return $this->serialize->deserializePackagingModel($response);
    }

    /**
     * @return WarehousesModel[]|null
     * @throws GuzzleException
     */
    public function getWarehouses(): ?array
    {
        $response = $this->requestGet(Endpoint::ENDPOINT_WAREHOUSES);

        if ($response === null) {
            return [];
        }

        return $this->serialize->deserializeWarehousesModel($response);
    }

    /**
     * @return UserModel|null
     * @throws GuzzleException
     */
    public function getUser(): ?UserModel
    {
        $response = $this->requestGet(Endpoint::ENDPOINT_USERS);

        if ($response === null) {
            return null;
        }

        return $this->serialize->deserializeUser($response);
    }
}