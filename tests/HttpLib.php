<?php

namespace IpInformer\Tests;

use IpInformer\InterfaceDataLoader;

class HttpLib implements InterfaceDataLoader
{
    public function loadData($queryParams)
    {
        return [
            "query" => "24.48.0.1",
            "status" => "success",
            "country" => "Canada",
            "countryCode" => "CA",
            "region" => "QC",
            "regionName" => "Quebec",
            "city" => "Québec",
        ];
    }
}