# Fazpass PHP Seamless
This is php seamless library to help you decrypt meta response from server

## Installation
Add this into your composer.json
```JSON
{
    "require": {
        "fazpass/phpseamless":"version"
    }
}
```

next, you need to run 
```BASH
composer install
```

Use autoloader Composer into your php script

```PHP
require_once 'vendor/autoload.php';
```

## Usage
This is the example how to use this library
```PHP
<?php
include 'fazpass.php';
try {
    $privateKeyPath = __DIR__ . '/../src/key/sample.key';
    $fazpass = new Fazpass($privateKeyPath);
    $encryptedData = 'META'; // meta response from our server
    $result = $fazpass->extract($encryptedData);
    echo "Hasil Ekstraksi:\n";
    print_r($result->challenge);
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
```

## Other
For object inside meta and general documentation, please refer this [Link](https://github.com/fazpass/seamless-documentation)