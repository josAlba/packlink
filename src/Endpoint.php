<?php

namespace packlink;

class Endpoint
{
    public const ENDPOINT = 'https://api.packlink.com/';
    public const ENDPOINT_VERSION = 'v1/';

    public const ENDPOINT_CLIENT = 'clients';
    public const ENDPOINT_USERS = 'users';
    public const ENDPOINT_SHIPMENTS = 'shipments';
    public const ENDPOINT_LOCATION = 'locations';

    public const ENDPOINT_PACKAGES = self::ENDPOINT_USERS . '/parcels';
    public const ENDPOINT_WAREHOUSES = self::ENDPOINT_CLIENT . '/warehouses';
    public const ENDPOINT_LABELS = '/labels';
    public const ENDPOINT_TRACKS = '/track';
    public const ENDPOINT_CALLBACK = '/callback';
    public const ENDPOINT_POSTAL_CODE = '/postalcodes';
}