# laravel-mongodb-notifications

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Total Downloads][ico-downloads]][link-downloads]

A package for mongodb notifications

## Install

Via Composer

``` bash
$ composer require mohamedtarek20/laravel-mongodb-notifications
```

## Usage

On your model

``` php
use Mohamedtarek20\LaravelMongodbNotifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
}
```

<!-- ## Security

If you discover any security related issues, please email mohamedtarek20@gmail.com instead of using the issue tracker. -->

<!-- ## Credits

- [Mohamed Tarek][link-author]
- [All Contributors][link-contributors] -->

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/mohamedtarek20/laravel-mongodb-notifications.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/mohamedtarek20/laravel-mongodb-notifications.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/mohamedtarek20/laravel-mongodb-notifications.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/mohamedtarek20/laravel-mongodb-notifications.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/mohamedtarek20/laravel-mongodb-notifications
[link-downloads]: https://packagist.org/packages/mohamedtarek20/laravel-mongodb-notifications
[link-author]: https://github.com/mohamedtarek20
[link-contributors]: ../../contributors
