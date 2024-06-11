<?php

namespace CloudWales\LaravelInfobipSms\Exceptions;

class AuthenticationFailedException extends \Exception
{
    public static function unauthorisedUser($description)
    {
            return new self($description);
    }
}
