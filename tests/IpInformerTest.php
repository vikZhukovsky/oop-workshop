<?php

namespace IpInformer\Tests;

use PHPUnit\Framework\TestCase;
use IpInformer\IpInformer;
use IpInformer\Tests\AnyDataLoader;

class IpInformerTest extends TestCase
{

    protected $ipInformer;
    protected $anyDataLoader;

    public function testLoadData()
    {
        $this->ipInformer = new IpInformer();
        $this->anyDataLoader = new AnyDataLoader();

        $expected = [
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

        $this->assertEquals($expected, $this->ipInformer->loadData(null, null, $this->anyDataLoader));
    }

}