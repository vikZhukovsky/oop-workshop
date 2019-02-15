<?php

namespace IpInformer;

use GuzzleHttp\Client;
use IpInformer\DataLoader;

class IpInformer
{
    protected $dataFormat;
    protected $ip;
    protected $DataLoader;

    public function __construct($dataFormat = 'json', $ip = '', $httpClientParams)
    {
        $this->dataFormat = $dataFormat;
        $this->ip = $ip;
        $this->DataLoader = new DataLoader(new Client($httpClientParams));
    }

    public function takeInformation()
    {
        $this->DataLoader->loadData($this->ip, $this->makeQueryParams($this->dataFormat, $this->ip));
    }

    protected function makeQueryParams($dataFormat, $ip)
    {
        return $dataFormat . '/' . $ip;
    }
}
