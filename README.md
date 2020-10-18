# Collection Paginator

[![Latest Version on Packagist](https://img.shields.io/packagist/v/acadea/collection-paginator.svg?style=flat-square)](https://packagist.org/packages/acadea/collection-paginator)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/acadea/collection-paginator/run-tests?label=tests)](https://github.com/acadea/collection-paginator/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/acadea/collection-paginator.svg?style=flat-square)](https://packagist.org/packages/acadea/collection-paginator)


A helper package to paginate Laravel collections. 

## About

Learn the idea behind this package: 
* Read on my [Medium blog: How to ](https://medium.com/@sam_ngu/laravel-how-to-paginate-collection-8cb4b281bc55)
* or watch it on [Youtube](https://www.youtube.com/watch?v=eGEa9W6r3Zg)

Follow us on Youtube: [Acadea.io](https://www.youtube.com/channel/UCU5RsUGkVcPM9QvFHyKm1OQ)


## Installation

You can install the package via composer:

```bash
composer require acadea/collection-paginator
```

## Usage

```php
$collection = [1,2,3,4,5,6,7,8];
$pageSize = 4;
$paginated = \Acadea\CollectionPaginator\CollectionPaginator::paginate($collection, $pageSize);
dump($paginated);
```

Expects: 
```
Illuminate\Pagination\LengthAwarePaginator {#296
  #total: 8
  #lastPage: 2
  #items: Illuminate\Support\Collection {#288
    #items: array:4 [
      0 => 1
      1 => 2
      2 => 3
      3 => 4
    ]
  }
  #perPage: 4
  #currentPage: 1
  #path: "http://localhost"
  #query: []
  #fragment: null
  #pageName: "page"
  +onEachSide: 3
  #options: array:2 [
    "path" => "http://localhost"
    "pageName" => "page"
  ]
}

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
