<?php

namespace IpInformer;

use IpInformer\DataLoader;

class IpInformer
{
    protected $dataFormat;
    protected $ip;
    protected $DataLoader;

    public function __construct($dataFormat = 'json', $ip = null)
    {
        $this->dataFormat = $dataFormat;
        $this->ip = $ip ?? $_SERVER['REMOTE_ADDR'];
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
