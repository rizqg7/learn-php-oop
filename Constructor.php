<?php
require_once "data/Person.php";

// ketika memanggil sebuah class sebagai object maka akan memanggil function "sonstruct"  
$budi = new Person("Budi", "Jakarta");
var_dump($budi);
