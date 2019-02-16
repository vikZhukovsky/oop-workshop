<?php

namespace IpInformer;

use IpInformer\DataLoader;

class IpInformer
{
    protected $dataFormat;
    protected $ip;
    protected $DataLoader;

    public function __construct($dataFormat = 'json', $ip = '', $dataLoader = null)
    {
        $this->dataFormat = $dataFormat;
        $this->ip = $ip;
        $this->DataLoader = $dataLoader ?? new DataLoader();
    }

    public function loadData($ip = '', $dataFormat = null)
    {
        $dataFormat = $dataFormat ?? $this->dataFormat;

        return $this->DataLoader->loadData($this->makeQueryParams($dataFormat ?? $this->dataFormat, $ip ?? $this->ip));
    }

    protected function makeQueryParams($dataFormat, $ip)
    {
        return $dataFormat . '/' . $ip;
    }
}
