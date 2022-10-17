<?php

namespace packlink;

use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use RuntimeException;

class Packlink
{
    private Client $client;

    public function __construct(private string $apiKey)
    {
        $options = [
            'base_uri' => Endpoint::ENDPOINT.Endpoint::ENDPOINT_VERSION,
            'headers' => [
                'Authorization' => $this->apiKey,
            ],
        ];

        $this->client = new Client($options);
    }

    /**
     * @param string $endpoint
     *
     * @return string|null
     * @throws GuzzleException
     */
    public function requestGet(string $endpoint): ?string
    {
        $request = $this->client->get($endpoint);

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
            throw new RuntimeException('body is null');
        }

        try {
            $options = [
                'headers' => [
                    'Authorization' => $this->apiKey,
                    'Content-Type' => 'application/json',
                    'Accept' => 'application/json',
                    'Content-Length' => strlen($body),
                ],
                'body' => $body,
            ];

            $request = $this->client->post(
                Endpoint::ENDPOINT.Endpoint::ENDPOINT_VERSION.$endpoint,
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
            throw new RuntimeException($exception->getMessage());
        }
    }
}