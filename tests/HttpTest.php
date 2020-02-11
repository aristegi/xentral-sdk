<?php

namespace Deinebaustoffe\XentralSdk\Tests;

use Deinebaustoffe\XentralSdk\Models\Product;
use Orchestra\Testbench\TestCase;
use Deinebaustoffe\XentralSdk\XentralSdkServiceProvider;

class HttpTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [XentralSdkServiceProvider::class];
    }

    /** @test */
    public function test_can_get_products()
    {
        $client = new Product();
        $client->getProducts();
    }
}
