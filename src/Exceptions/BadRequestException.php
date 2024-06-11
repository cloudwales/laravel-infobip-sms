<?php

namespace CloudWales\LaravelInfobipSms\Exceptions;

class BadRequestException extends \Exception
{
    public static function badRequest($response)
    {
            return new self($response->description . "\n" . $response->action);
    }
}
