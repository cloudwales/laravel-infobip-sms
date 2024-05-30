<?php

namespace CloudWales\LaravelInfobipSms;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Illuminate\Support\Facades\Http;

class LaravelInfobipSmsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-infobip-sms')
            ->hasConfigFile();
    }

    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/infobip-sms.php', 'infobip-sms'
        );
    }
}
