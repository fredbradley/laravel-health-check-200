<?php

namespace FredBradley\LaravelHealthCheck200;

use Illuminate\Http\Client\ConnectionException;
use Illuminate\Http\Client\RequestException;
use Illuminate\Support\Facades\Http;

class LaravelHealthCheck200
{
    /**
     * @return bool
     * @throws RequestException|ConnectionException
     */
    public function test()
    {
        return Http::get($this->url)->throw()->successful();
    }

    public function __construct(protected string $url)
    {
    }

}
