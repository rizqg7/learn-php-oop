<?php
require_once "data/Person.php";
// instansiasi object "person"
$person = new Person("Rizqi", "Jombang");
// mengakses function didalam object
$person->sayHello("Rizqi") ;

// instansiasi object "rizqi"
$rizqi = new Person("Eko", "Subang");
// mengakses properties "name"
$rizqi->name = "Rizqi";
// mengakses function "welcome"
$rizqi->welcome("Eko");

// instansiasi object "eko"
$eko = new Person("Eko", "Bali");
// mengakses properties "name"
$eko->name = 'Eko';
// mengakses function "welcome"
$eko->welcome(null);
// mengakses class saat ini
$eko->info();