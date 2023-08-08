<?php

namespace FredBradley\LaravelHealthCheck200\Commands;

use Illuminate\Console\Command;

class LaravelHealthCheck200Command extends Command
{
    public $signature = 'laravel-health-check-200';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
