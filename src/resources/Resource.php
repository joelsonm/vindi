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
            'base_uri' => "$this->endpoint/$this->version/";
        ]);
    }

    public function getRequest($uri, $params = [])
    {
        dd($this->client);
    }

    private function request($method, $uri, $params = [])
    {
        # code...
    }

    private function response($response){
        return $response;
    }
}
