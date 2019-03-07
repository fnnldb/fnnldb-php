# FnnlDb PHP Library

You can sign up for a FnnlDb account at [https://fnnldb.com](https://fnnldb.com).

## Requirements

PHP 7.1.3 and later.

## Installing

You can install the library via [Composer](http://getcomposer.org/). Run the following command:

```bash
composer require fnnldb/fnnldb-php
```

To use the library, use Composer's [autoload](https://getcomposer.org/doc/01-basic-usage.md#autoloading):

```php
require_once('vendor/autoload.php');
```

## Getting Started

Simple usage looks like:

```php
$fnnldb = new FnnlDb('YOUR_API_KEY');
$order = $fnnldb->create('order', $data);
echo $order->id;
```

## Documentation

Please see [https://fnnldb.com/docs](https://fnnldb.com/docs) for up-to-date documentation.

## Contributing

Thank you for considering contributing to the FnnlDb PHP Library! We accept contributions via Pull Requests on [GitHub](https://github.com/fnnldb/fnnldb-php).

## License

This project is licensed under the MIT License - see the [LICENCE.md](LICENCE.md) file for details.
