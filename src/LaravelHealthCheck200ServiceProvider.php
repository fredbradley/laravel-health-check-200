<?php

namespace FredBradley\LaravelHealthCheck200;

use FredBradley\LaravelHealthCheck200\Commands\LaravelHealthCheck200Command;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelHealthCheck200ServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-health-check-200')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-health-check-200_table')
            ->hasCommand(LaravelHealthCheck200Command::class);
    }
}
