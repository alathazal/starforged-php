# alathazal/starforged-php

![Static Badge](https://img.shields.io/badge/version-1.0.0-blue)
![Static Badge](https://img.shields.io/badge/php-8.4-green?logo=php)
![Static Badge](https://img.shields.io/badge/pest-5.1-green)

The **starforged-php** package is a generic PHP wrapper that loads the JSON data files provided by
the [alathazal/starforged-data](https://github.com/alathazal/starforged-data) package, to provide them as standard
PHP array resources.

## Usage

To install the **starforged-php** package using composer, run the following at the command line in your project folder.

```
composer require alathazal/starforged-php
```

You can access the varoius datasets using the `getData()` method, used in conjuction with the `DataTypes` enumerator
to select which dataset you're looking for.

_OR_

There is a helper, shortcut method setup for each dataset that can be called by name.

```php
use Alathazal\StarforgedData\DataTypes;
use Alathazal\StarforgedPhp\StarforgedPhp;

$starforged = new StarforgedPhp();

// using a named dataset.
$truths = $starforged->getData(DataTypes::TRUTHS);

// using a named shortcut method.
         $assets = $starforged->assets();
    $asset_types = $starforged->asset_types();
     $encounters = $starforged->encounters();
$move_categories = $starforged->move_categories();
          $moves = $starforged->moves();
        $oracles = $starforged->oracles();
         $truths = $starforged->truths();
```

## Testing

Testing for this package is done through a suite of PEST tests, that checks that the data files are parsed properly and that the endpoints for this repository all return data in arrays as expected. These tests can be found in the `tests/` folder of the project and can be run using:

```
composer test
```

## License

### MIT License

Copyright (c) 2026 Alathazal

_For specific information regarding this license, please see the LICENSE.md file._
