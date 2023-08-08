<?php

namespace FredBradley\LaravelHealthCheck200;

use Illuminate\Http\Client\ConnectionException;
use Spatie\Health\Checks\Check as HealthCheck;
use Spatie\Health\Checks\Result;

class Check extends HealthCheck
{

    public function run(): \Spatie\Health\Checks\Result
    {
        $result = Result::make()->ok()->shortSummary("Short Summary");

        $measure = new LaravelHealthCheck200('https://google.com');

        try {
             $testResult = $measure->test();
        } catch (ConnectionException $exception) {
            $result->failed("Could not find connection to {$this->url}");
        }
        return $result;
    }
}
