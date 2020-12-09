<?php

namespace Robertmarney\LaravelHashidRelationships\Tests;

use Orchestra\Testbench\TestCase;
use Robertmarney\LaravelHashidRelationships\LaravelHashidRelationshipsServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [LaravelHashidRelationshipsServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
