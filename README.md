# Sends SMS messages through the InfoBit System

[![Latest Version on Packagist](https://img.shields.io/packagist/v/cloudwal/laravel-infobit-sms.svg?style=flat-square)](https://packagist.org/packages/cloudwal/laravel-infobit-sms)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/cloudwal/laravel-infobit-sms/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/cloudwal/laravel-infobit-sms/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/cloudwal/laravel-infobit-sms/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/cloudwal/laravel-infobit-sms/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/cloudwal/laravel-infobit-sms.svg?style=flat-square)](https://packagist.org/packages/cloudwal/laravel-infobit-sms)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

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
];
```

## Usage

```php
$laravelInfobitSms = new CloudWales\LaravelInfobitSms();
echo $laravelInfobitSms->echoPhrase('Hello, CloudWales!');
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
