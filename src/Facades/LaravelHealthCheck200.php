<?php

namespace FredBradley\LaravelHealthCheck200\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \FredBradley\LaravelHealthCheck200\LaravelHealthCheck200
 */
class LaravelHealthCheck200 extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \FredBradley\LaravelHealthCheck200\LaravelHealthCheck200::class;
    }
}
