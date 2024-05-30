<?php

namespace CloudWales\LaravelInfobitSms\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \CloudWales\LaravelInfobitSms\LaravelInfobitSms
 */
class LaravelInfobitSms extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \CloudWales\LaravelInfobitSms\LaravelInfobitSms::class;
    }
}
