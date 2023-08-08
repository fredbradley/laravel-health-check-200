<?php

namespace FredBradley\LaravelHealthCheck200\Tests;

use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [

        ];
    }

    public function getEnvironmentSetUp($app)
    {
        //config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_laravel-health-check-200_table.php.stub';
        $migration->up();
        */
    }
}
