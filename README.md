# JSMin wrapper for dc/bundler

Enables you to minify Javascript files using dc/bundler.

## Installation

```
composer require dc/bundler-jsmin
```

or in `composer.json`

```json
"require": {
    "dc/bundler-jsmin": "dev-master"
}
```

## Setup

This package depends on `dc/router`, but strongly suggests `dc/ioc`. This is how you register the transformer with
the IoC container so it is picked up automatically:

```php
\DC\Bundler\JSMin\JSMinTransformer::registerWithContainer($container);
```
