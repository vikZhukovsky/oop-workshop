<?php

namespace IpInformer;

class DataLoader
{
    private $httpClient;

    public function __construct($httpClient)
    {
        $this->httpClient = $httpClient;
    }

    public function loadData($baseUrl, $queryParams)
    {
        $this->httpClient->get($baseUrl . $queryParams);
    }

}