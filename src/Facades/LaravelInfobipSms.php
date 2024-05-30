<?php

namespace CloudWales\LaravelInfobitSms\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \CloudWales\LaravelInfobitSms\LaravelInfobipSms
 */
class LaravelInfobipSms extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \CloudWales\LaravelInfobitSms\LaravelInfobipSms::class;
    }
}
