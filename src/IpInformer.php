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

    public function loadData($dataFormat = null, $ip = null)
    {
        $dataFormat = $dataFormat ?? $this->dataFormat;

        return $this->DataLoader->loadData($this->makeQueryParams($dataFormat ?? $this->dataFormat, $ip ?? $this->ip));
    }

    protected function makeQueryParams($dataFormat, $ip)
    {
        return $dataFormat . '/' . $ip;
    }
}
