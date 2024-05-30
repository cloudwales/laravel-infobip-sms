<?php

// config for CloudWales/LaravelInfobitSms
return [
    'sender' => env('INFOBIP_SENDER', 'Laravel'),
    'username' => env('INFOBIP_USERNAME', 'user'),
    'password' => env('INFOBIP_PASSWORD', '123456'),
    'url' => env('INFOBIP_URL', 'https://test.api.infobip.com'),
];
