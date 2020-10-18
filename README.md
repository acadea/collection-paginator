# Laravel Package to paginate any collection

[![Latest Version on Packagist](https://img.shields.io/packagist/v/acadea/collection-paginator.svg?style=flat-square)](https://packagist.org/packages/acadea/collection-paginator)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/acadea/collection-paginator/run-tests?label=tests)](https://github.com/acadea/collection-paginator/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/acadea/collection-paginator.svg?style=flat-square)](https://packagist.org/packages/acadea/collection-paginator)


This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us


## Installation

You can install the package via composer:

```bash
composer require acadea/collection-paginator
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="Acadea\CollectionPaginator\CollectionPaginatorServiceProvider" --tag="migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Acadea\CollectionPaginator\CollectionPaginatorServiceProvider" --tag="config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

``` php
$collection-paginator = new Acadea\CollectionPaginator();
echo $collection-paginator->echoPhrase('Hello, Acadea!');
```

## Testing

``` bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [sam-ngu](https://github.com/sam-ngu)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
