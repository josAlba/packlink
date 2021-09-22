<?php

namespace packlink;

use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class Packlink
{
    private string $apiKey;
    private Client $client;

    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
        $this->client = new Client();
    }

    /**
     * @param string $endpoint
     * @return string|null
     * @throws GuzzleException
     */
    public function requestGet(string $endpoint): ?string
    {
        $options = [
            'headers' => [
                'Authorization' => $this->apiKey
            ]
        ];

        $request = $this->client->get(
            Endpoint::ENDPOINT . Endpoint::ENDPOINT_VERSION . $endpoint,
            $options
        );

        if ($request->getStatusCode() !== 200) {
            return null;
        }

        return $request->getBody();
    }

    /**
     * @throws Exception
     */
    public function requestPost(string $endpoint, string $body = ''): ?string
    {
        if (empty($body)) {
            throw new Exception('body is null');
        }

        try {
            $options = [
                'headers' => [
                    'Authorization' => $this->apiKey,
                    'Content-Type' => 'application/json',
                    'Accept' => 'application/json',
                    'Content-Length' => strlen($body)
                ],
                'body'=>$body
            ];

            $request = $this->client->post(
                Endpoint::ENDPOINT . Endpoint::ENDPOINT_VERSION . $endpoint,
                $options
            );

            if ($request->getStatusCode() !== 200) {
                return null;
            }

            return $request->getBody();

        } catch (GuzzleException $exception) {
            if ($exception->getCode() === 400) {
                return null;
            }
            throw new Exception($exception->getMessage());
        }
    }
}