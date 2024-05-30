<?php

namespace CloudWales\LaravelInfobitSms\Commands;

use Illuminate\Console\Command;

class LaravelInfobitSmsCommand extends Command
{
    public $signature = 'laravel-infobit-sms';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
