# Xentral ERP SDK (Currently only GET Resources)

[![Latest Version on Packagist](https://img.shields.io/packagist/v/deinebaustoffe/xentral-sdk.svg?style=flat-square)](https://packagist.org/packages/deinebaustoffe/xentral-sdk)
[![Total Downloads](https://img.shields.io/packagist/dt/deinebaustoffe/xentral-sdk.svg?style=flat-square)](https://packagist.org/packages/deinebaustoffe/xentral-sdk)

Xentral ERP Bridge for Laravel 6.x

## Installation

You can install the package via composer:

```bash
composer require deinebaustoffe/xentral-sdk
```

## Usage

Publish Config-File:
``` bash
php artisan vendor:publish --provider="Deinebaustoffe\XentralSdk\XentralSdkServiceProvider"
```

Initialize SDK:
``` php
$addressService = (new \Deinebaustoffe\XentralSdk\Models\Address);

$addressService->getAddresses();
```

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email florian.wartner@deinebaustoffe.de instead of using the issue tracker.

## Credits

- [Florian Wartner](https://github.com/deinebaustoffe)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
