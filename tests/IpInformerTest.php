<?php

namespace IpInformer\Tests;

use PHPUnit\Framework\TestCase;
use IpInformer\IpInformer;
use IpInformer\Tests\HttpLib;

class IpInformerTest extends TestCase
{

    protected $ipInformer;
    protected $anyDataLoader;

    public function testLoadData()
    {
        $this->anyDataLoader = new HttpLib();
        $this->ipInformer = new IpInformer(null, null, $this->anyDataLoader);

        $expected = [
            "query" => "24.48.0.1",
            "status" => "success",
            "country" => "Canada",
            "countryCode" => "CA",
            "region" => "QC",
            "regionName" => "Quebec",
            "city" => "Québec",
        ];

        $this->assertEquals($expected, $this->ipInformer->loadData());
    }

}