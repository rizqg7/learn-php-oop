<?php
require_once "data/SayGoodbye.php";

use Data\Traits\Person;

$person = new Person();
// seluruh isi yang diwariskan dari parentnya akan terinclud  Pada class Person
$person->goodBye("Rizqi");
$person->hello("y");
$person->firstName = "Eko" ;
var_dump($person);
$person->sayWelcome("Budi");