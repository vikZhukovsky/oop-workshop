<?php

namespace IpInformer\Tests;

class AnyDataLoader implements InterfaceDataLoader
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
            "zip" => "G1X",
            "lat" => 46.7749,
            "lon" => -71.3344,
            "timezone" => "America/Toronto",
            "isp" => "Le Groupe Videotron Ltee",
            "org" => "Videotron Ltee",
            "as" => "AS5769 Videotron Telecom Ltee"
        ];
    }
}