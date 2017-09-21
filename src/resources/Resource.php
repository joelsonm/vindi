<?php

namespace Joelsonm\Vindi\Resources;

use GuzzleHttp\Client;

/**
 *
 */
class Resource
{
    private $endpoint = 'https://app.vindi.com.br/api';
    private $version  = 'v1';
    private $client;

    function __construct($apikey)
    {
        $this->client = new Client([
            'base_uri' => $this->getEndpoint() . "/",
            'auth' => [$apikey, '', 'BASIC'],
            'headers' => [
                'Content-Type' => 'application/json',
                'User-Agent'   => trim("Joelsonm/Vindi; " . url('/')),
            ],
            'timeout' => 60,
            'exceptions' => false
        ]);
    }

    private function getEndpoint()
    {
        return $this->endpoint . '/' . $this->version;
    }

    public function getRequest($uri, array $options = [])
    {
        return $this->request('GET', $uri, $options);
    }

    public function postRequest($uri, array $options = [])
    {
        return $this->request('POST', $uri, $options);
    }

    public function putRequest($uri, array $options = [])
    {
        return $this->request('PUT', $uri, $options);
    }

    public function deleteRequest($uri, array $options = [])
    {
        return $this->request('DELETE', $uri, $options);
    }

    private function request($method, $uri, array $options = [])
    {
        $request = $this->client->request($method, $uri, $options);

        return $this->response($request);
    }

    private function response($response){
        return json_decode(json_encode(array_merge([
            'status' => $response->getStatusCode(),
            'headers' => $response->getHeaders(),
        ], json_decode($response->getBody()->getContents(), true))));
    }
}
