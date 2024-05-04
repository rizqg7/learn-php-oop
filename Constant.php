<?php
require_once "data/person.php";
// mengakses constant tidak seperti mengakses properties karena constant selalu sama nilai nya dan tidak bisa dirubah 
// constant menempel di class 
echo Person::AUTHOR . PHP_EOL;

// Mendefinisikan konstanta APLICATION dengan nilai "BELAJAR PHP OOP" (versi lama)
define("APLICATION","BELAJAR PHP OOP");
// Mendefinisikan konstanta APP_VERSION dengan nilai "1.0.0" (versi baru)
const APP_VERSION = "1.0.0";

echo APLICATION . PHP_EOL;
echo APP_VERSION . PHP_EOL;