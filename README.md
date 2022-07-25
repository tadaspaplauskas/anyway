# Anyway

[![Packagist Downloads](https://img.shields.io/packagist/dm/tadaspaplauskas/anyway)](https://packagist.org/packages/tadaspaplauskas/anyway)

You've been working with PHP for years, yet still struggle to remember the order of arguments each time you have to use `in_array`, `array_map`, `implode`, etc.? Don't worry - just install this package and your struggles will be over!

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

Wrong :(

The good news is that `Anyway` knows what you meant and isn't a stickler for rules:

```php
use Anyway;

Anyway::in_array([1, 2, 3], 2);

// true
```

Of course, if arguments don't make sense in any order, `Anyway` will still let you know about it...

```php
use Anyway;

Anyway::in_array([1, 2, 3], fn () => false);

// ErrorException
// Object of class Closure could not be converted to int
```

`Anyway` works with all functions in the global space.

## License

This package is released under the MIT License. See LICENSE for details.

## Disclaimer

I know this is silly :). This package was [inspired by a tweet](https://twitter.com/aschmelyun/status/1549716246907654144), take it with a grain of salt. While it's pretty harmless and can be used in production, you might get some weird looks from teammates. Best to treat this as joke in a package form.
