<?php

// config for CloudWales/LaravelInfobitSms
return [
    'sender' => env('INFOBIP_SENDER', 'Laravel'),
    'username' => env('INFOBIP_USERNAME', 'user'),
    'password' => env('INFOBIP_PASSWORD', '123456'),
    'host' => env('INFOBIP_HOST', 'https://test.api.infobip.com'),
];
