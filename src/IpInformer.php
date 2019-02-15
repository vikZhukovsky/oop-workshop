<?php

namespace IpInformer;

use IpInformer\DataLoader;

class IpInformer
{
    protected $dataFormat;
    protected $ip;
    protected $DataLoader;

    public function __construct($dataFormat = 'json', $ip = '')
    {
        $this->dataFormat = $dataFormat;
        $this->ip = $ip;
        $this->DataLoader = new DataLoader();
    }

    public function takeInformation()
    {
        return $this->DataLoader->loadData($this->makeQueryParams($this->dataFormat, $this->ip));
    }

    protected function makeQueryParams($dataFormat, $ip)
    {
        return $dataFormat . '/' . $ip;
    }
}
