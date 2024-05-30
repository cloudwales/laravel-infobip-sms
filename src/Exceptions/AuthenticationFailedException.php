<?php

namespace CloudWales\LaravelInfobipSms\Exceptions;

class AuthenticationFailedException extends \Exception
{
    public static function unauthorisedUser()
    {
            return new self("User is not authenticated");
    }
}
