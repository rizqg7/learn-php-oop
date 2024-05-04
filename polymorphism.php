<?php 
require_once "data/Programmer.php";
// kemampuan pholimorphisme adalah properti / data nya berubah - ubah bentuk tipe datanya
// biasanya di set dari parentnya tipe datanya agar semua bentuk object dari childnya bisa diakses
$company = new Company();
$company->programmer = new Programmer("Rizqi"); // object tipe programmer
var_dump($company);

$company->programmer = new BackendProgrammer("Rizqi"); // object tipe backendProgrammer
var_dump($company);

$company->programmer = new FrontendProgrammer("Rizqi"); // object tipe frontendProgrammer
var_dump($company);

// function argumen di polymorphism
// polymorphism bisa dimasukkan di properties maupun arguments
sayHelloProgrammer(new Programmer("Rizqi"));
sayHelloProgrammer(new BackendProgrammer("Rizqi"));
sayHelloProgrammer(new FrontendProgrammer("Rizqi"));