# Sends SMS messages through the InfoBip V3 API

[![Latest Version on Packagist](https://img.shields.io/packagist/v/cloudwal/laravel-infobip-sms.svg? style=flat-square)](https://packagist.org/packages/cloudwal/laravel-infobip-sms)
[![run-tests](https://github.com/cloudwales/laravel-infobit-sms/actions/workflows/run-tests.yml/badge.svg? branch=main)](https://github.com/cloudwales/laravel-infobip-sms/actions/workflows/run-tests.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/cloudwal/laravel-infobip-sms.svg?style=flat-square)]
(https://packagist.org/packages/cloudwal/laravel-infobip-sms)

This is a very simple package to send sms messages through the InfoBip API.

## Installation

You can install the package via composer:

```bash
composer require cloudwal/laravel-infobip-sms
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-infobip-sms-config"
```

This is the contents of the published config file:

```php
return [
    'sender' => env('INFOBIP_SENDER', 'Laravel'),
    'username' => env('INFOBIP_USERNAME', 'user'),
    'password' => env('INFOBIP_PASSWORD', '123456'),
    'url' => env('INFOBIP_URL', 'https://test.api.infobip.com'),
];
```

## Usage

```php
use CloudWales\LaravelInfobitSms\LaravelInfobipSms;

$response = new LaravelInfobipSms();
return $response->send('0123456789', 'Test message');

```

## Testing

```bash
composer test
```

## Upcoming

To be added:
- WhatsApp messaging


## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.


## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Cloud Wales](https://www.cloud-wales.co.uk)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
