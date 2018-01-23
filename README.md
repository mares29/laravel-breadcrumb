# Breadcrumb for Laravel 5

This package provide simple way to implement breadcrumb for your laravel 5 application.

## Install

Via Composer

``` bash
$ composer require mares29/laravel-breadcrumb
```

Laravel 5.5+ automaticly register service provider and set Alias thanks to auto-discovery. With lower laravel version add to **app.php** 

``` php
'providers' => [
	\Mares29\Breadcrumb\BreadcrumbServiceProvider::class,
]

'aliases' => [
	'Breadcrumb' => \Mares29\Breadcrumb\Facades\BreadcrumbFacade::class,
]
```

## Usage

Use Facade to add breadcrumb links.

``` php
Breadcrumb::addLink("link title", "link route");
```

You can also add more links.

``` php
Breadcrumb::addLink("link title", "link route")
	->addLink("another link title", "link route");
```

And finaly render breadcrumb using render method in blade template.

``` php
{!! Breadcrumb::render() !!}
```

By default, first link (home link) is set automaticly with `config('app.name')` and links to `url("/")`. You can modify this by

```
Breadcrumb::setHomeLink("new home link", "/home.html");
```

**Need to modify breadcrumb html?** Use `vendor:publish` command and export breadcrumb view into resources folder.

```
php artisan vendor:publish --provider="Mares29\Breadcrumb\BreadcrumbServiceProvider"
```

## Credits

- [Karel Mares][https://github.com/mares29]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

