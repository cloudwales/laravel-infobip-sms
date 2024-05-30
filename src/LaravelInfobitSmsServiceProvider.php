<?php

namespace CloudWales\LaravelInfobitSms;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use CloudWales\LaravelInfobitSms\Commands\LaravelInfobitSmsCommand;
use Illuminate\Support\Facades\Http;

class LaravelInfobitSmsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-infobit-sms')
            ->hasConfigFile()
            ->hasCommand(LaravelInfobitSmsCommand::class);
    }
}
