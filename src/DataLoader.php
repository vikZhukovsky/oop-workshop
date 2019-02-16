<?php

namespace IpInformer;

use GuzzleHttp\Client;

class DataLoader implements InterfaceDataLoader
{
    private $httpClient;
    private $baseUrl = 'http://ip-api.com/';

    public function __construct()
    {
        $this->httpClient = new Client(['base_uri' => $this->baseUrl]);
    }

    public function loadData($queryParams)
    {
        return $this->httpClient->request('GET', $queryParams)->getBody();
    }
}