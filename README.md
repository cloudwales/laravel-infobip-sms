# Sends SMS messages through the InfoBit System

[![Latest Version on Packagist](https://img.shields.io/packagist/v/cloudwal/laravel-infobit-sms.svg?style=flat-square)](https://packagist.org/packages/cloudwal/laravel-infobit-sms)
[![Total Downloads](https://img.shields.io/packagist/dt/cloudwal/laravel-infobit-sms.svg?style=flat-square)](https://packagist.org/packages/cloudwal/laravel-infobit-sms)

This is a very simple package to send sms messages through the InfoBip API.

## Installation

You can install the package via composer:

```bash
composer require cloudwal/laravel-infobit-sms
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-infobit-sms-config"
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
use CloudWales\LaravelInfobitSms\LaravelInfobitSms;

$response = new LaravelInfobitSms();
return $response->send('0123456789', 'Test message');

```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Cloud Wales](https://www.cloud-wales.co.uk)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
