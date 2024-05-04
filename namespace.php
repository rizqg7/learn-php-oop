<?php
require_once "data/Conflict.php";
require_once "data/Helper.php";
// membuat object dari namespace 
// $var = new directorynamespace\class();

$conflict1 = new Data\one\Conflict();
$conflict2 = new Data\two\Conflict();

// function dan constant di namespace
echo Helper\AUTHOR;
Helper\helpMe();