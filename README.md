# jenesiszw phone_lib

a classic wrapper for libphonenumber for PHP by https://github.com/giggsey

## Get Started

---

### Installtion

```
composer require jenesiszw/phone_lib:dev-master
```

---

### Import vendor folder and PhoneLibrary class

```
<?php

use JenesisZw\PhoneLibrary;

require __DIR__ . '/vendor/autoload.php'';

```

---

### Usage

```
$number = "0782000340";

$data =  $phone = (new PhoneLibrary($number, 'ZW'))
    ->parse()
    ->getIsValid()
    ->getNationalFormat()
    ->getInternationalFormat()
    ->getCarrierProvider()
    ->getPhoneDescription()
    ->getTimeZone()
    ->done();



function dd($data)
{
    echo "<code>";
    echo "<pre>";
    die(print_r($data, true));
    echo "</pre>";
    echo "</code>";
}


dd($data);

```

---

### Response

```

Array
(
    [isValid] => true
    [nationalFormat] => 0782000340
    [internationalFormat] => +263 78 200 0340
    [carrierProvider] => Econet
    [country] => Zimbabwe
    [timeZone] => Africa/Harare
)

```

---

### Available Methods

1. getIsValid()

- check if number is valid or not
- returns bool

2. getInternationalFormat()

- get international format from the parsed number

3. getNationalFormat()

- get national format from the parsed number

4. getE164Format()

- get E164 format from the parsed number

5. getCarrierProvider()

- get carrier provider from the parsed number

6. getTimeZone()

- get time zone from the parsed number

6. getPhoneDescription()

- get country name from the parsed number

7. parse()

8. done()

- returns details for the parsed phone number

***Note: parse() and done() are the required methods, others are optional***

---
#### License: MIT
#### Author: Nigel Jaure
