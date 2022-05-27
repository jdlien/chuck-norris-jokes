# Chuck Norris Jokes

A simple package created as a demonstration of an open source package for distribution on [Packagist](https://packagist.org).

## Installation
Install the package using [Composer](https://getcomposer.org/):
```
composer require chucknorris/chucknorris
```

## Usage
```php
$jokeFactory = new JokeFactory();
$joke = $jokeFactory->getRandomJoke();
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Ensure to include tests for your changes.

## License
This software is open-sourced under the [MIT license](./LICENSE.txt).