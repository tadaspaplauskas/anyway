# Anyway

[![Packagist Downloads](https://img.shields.io/packagist/dm/tadaspaplauskas/anyway)](https://packagist.org/packages/tadaspaplauskas/anyway)

You've been working with PHP for years, yet still struggle to remember the order of arguments in functions like `in_array`, `array_map`, or `implode`? Don't worry, your struggles are finally over!

## Installation

```sh
composer require tadaspaplauskas/anyway
```

## Getting started

Quick! What's the first argument in the `in_array` function: array or value?

```php
in_array([1, 2, 3], 2);

// TypeError
// in_array(): Argument #2 ($haystack) must be of type array, int given
```

You guessed wrong :(

Good thing that `Anyway` always knows what you meant:

```php
use Anyway;

Anyway::in_array([1, 2, 3], 2);

// true

Anyway::in_array(4, [1, 2, 3]);

// false
```

`Anyway` will work with any function in the global space. Of course, if arguments don't make sense in any order, `Anyway` will still let you know about it:

```php
use Anyway;

Anyway::in_array([1, 2, 3], fn () => 'what?');

// ErrorException
// Object of class Closure could not be converted to int
```

## Limits

The package works with functions that expect arguments of different types. For example, it will not work with `explode` or `strpos`, because both expected arguments are strings.

## License

This package is released under the MIT License. See LICENSE for details.

## Disclaimer

I know this is silly :). The package was [inspired by a tweet](https://twitter.com/aschmelyun/status/1549716246907654144), take it with a grain of salt. While it's pretty harmless and can be used in production, you might get some weird looks from teammates. Best to treat this as a joke in a package form.
