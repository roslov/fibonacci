Fibonacci Number Calculator
===========================

[![Latest Stable Version](https://poser.pugx.org/roslov/fibonacci/v)](https://packagist.org/packages/roslov/fibonacci)
[![Total Downloads](https://poser.pugx.org/roslov/fibonacci/downloads)](https://packagist.org/packages/roslov/fibonacci)
[![License](https://poser.pugx.org/roslov/fibonacci/license)](https://packagist.org/packages/roslov/fibonacci)
[![PHP Version Require](https://poser.pugx.org/roslov/fibonacci/require/php)](https://packagist.org/packages/roslov/fibonacci)

This package calculates [the Fibonacci number](https://en.wikipedia.org/wiki/Fibonacci_number).


## Requirements

- PHP 7.4 or higher.


## Installation

The package could be installed with composer:

```shell
composer require roslov/fibonacci
```


## General usage

```php
#!/usr/bin/env php
<?php

declare(strict_types=1);

use Roslov\Fibonacci\Fibonacci;

require_once __DIR__ . '/vendor/autoload.php';

$fibonacciNumber = Fibonacci::calculate(10);

echo $fibonacciNumber;
```

This will return:

```
55
```


## Testing

### Unit testing

The package is tested with [PHPUnit](https://phpunit.de/). To run tests:

```shell
./vendor/bin/phpunit
```

### Code style analysis

The code style is analyzed with [PHP_CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer) and
[PSR-12 Ext coding standard](https://github.com/roslov/psr12ext). To run code style analysis:

```shell
./vendor/bin/phpcs --extensions=php --colors --standard=PSR12Ext --ignore=vendor/* -p -s .
```

