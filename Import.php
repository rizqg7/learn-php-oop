<?php
require_once "data/Conflict.php";
require_once "data/Helper.php";

// untuk mengimport namespace agar tidak terjadi pengulangan dalam mengimport maka menggunakan "use" 
// jika ada sebuah nama class yang sama tapi dalam namespace yang berbeda maka akan error 

use Data\one\Conflict;
use function\Helper\helpMe;
use const\Helper\AUTHOR;

// 
$conflict1 = new Conflict();
$conflict2 = new Conflict();
helpMe();
echo AUTHOR;