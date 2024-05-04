<?php
require_once "data/Conflict.php";
require_once "data/Helper.php";

// untuk mengimport namespace agar tidak terjadi pengulangan dalam mengimport maka menggunakan "use" 
// jika ada sebuah nama class yang sama tapi dalam namespace yang berbeda maka akan error 
// untuk mengatasi conflict pada pembuatan nama class yang sama dalam namespace yang berbeda maka bisa menggunakan alias 
// "use ... as namaalias" dan bisa juga untuk nama yang sama di function maupun const dll

use Data\one\Conflict as conflict1;
use Data\two\Conflict as conflict2;
use function \Helper\helpMe as help;
use const \Helper\AUTHOR as CREATOR;

$conflict1 = new Conflict1();
$conflict2 = new Conflict2();
help();
echo CREATOR;