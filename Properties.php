<?php
// manipulasi properties
// fields / properties dapat di manipulasi seperti pada variable
// mengakses fields menggunakan "->" setelah namaobject dan diikuti nama fields nya

require_once "data/Person.php";

$person = new Person();
$person->name = "Rizqi";
$person->address = "Jombang";
$person->country = "Indonesia";
$person->religion = null;

echo "Name : $person->name " . PHP_EOL;
echo "Address : $person->address " . PHP_EOL;
echo "Country : $person->country " . PHP_EOL;
echo "Religion : $person->religion " . PHP_EOL;