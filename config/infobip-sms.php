<?php

// config for CloudWales/LaravelInfobitSms
return [
    'sender' => env('INFOBIP_SENDER', 'Laravel'),
    'from' => env('INFOBIP_FROM_NUMBER', '0123456789'),
    'username' => env('INFOBIP_USERNAME', 'user'),
    'password' => env('INFOBIP_PASSWORD', '123456'),
    'host' => env('INFOBIP_HOST', 'https://test.api.infobip.com'),
];
