<?php

use JenesisZw\PhoneLibrary;

require __DIR__ . '/bootstrap/app.php';


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
