<?php

$array = [
    "firstName" => "Ahmad",
    "middleName" => "Rizqi",
    "lastName" => "Abdilah",
];

$object = (object)$array; // konversi dari array ke object
// saat sebuah array dikonversi menjadi object maka yang terjadi adalah setiap key akan sirubah menajadi properties 
// dan class bernama stdClass
var_dump($object);
echo "firstName $object->firstName" . PHP_EOL;
echo "middleName $object->middleName" . PHP_EOL;
echo "lastName $object->lastName" . PHP_EOL;

$arrayLagi = (array)$object; // dirubah lagi menjadi object
var_dump($arrayLagi); 