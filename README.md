# Laravel Breadcrumb

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]


This package provide simple way to implement breadcrumb for your laravel 5 application.

## Install

Via Composer

``` bash
$ composer require mares29/laravel-breadcrumb
```

## Usage

You can use Facade to set breadcrumb links.

``` php
Breadcrumb::addLink("link title", "link route");
```

You can also add more links

``` php
Breadcrumb::addLink("link title", "link route")
	->addLink("another link title", "link route");
```

And finaly render breadcrumb using render method in blade template.

``` php
{!! Breadcrumb::render() !!}
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email karel@mares29.cz instead of using the issue tracker.

## Credits

- [Karel Mares][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/mares29/Laravel Breadcrumb.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/mares29/Laravel Breadcrumb/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/mares29/Laravel Breadcrumb.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/mares29/Laravel Breadcrumb.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/mares29/Laravel Breadcrumb.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/mares29/Laravel Breadcrumb
[link-travis]: https://travis-ci.org/mares29/Laravel Breadcrumb
[link-scrutinizer]: https://scrutinizer-ci.com/g/mares29/Laravel Breadcrumb/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/mares29/Laravel Breadcrumb
[link-downloads]: https://packagist.org/packages/mares29/Laravel Breadcrumb
[link-author]: https://github.com/mares29
[link-contributors]: ../../contributors
