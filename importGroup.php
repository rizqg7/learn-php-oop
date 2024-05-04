<?php
require_once "data/Conflict.php";
require_once "data/Helper.php";
// penggunaan group use bisa mempermudah dalam menangani namespace 
use Data\one\{Conflict as Conflict1, Dummy, Sample};
use function Helper\ {helpMe};

$conflict = new Conflict1();
$dummy = new Dummy();
$sample = new Sample();

helpMe();