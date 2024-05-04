<?php

require_once "data/Manager.php";
// catatan untuk mengambil data didalam object menggunakan "->" 
// untuk memasukkan variable / child baru kedalam class menggunakan kata kunci "new"
$manager = new Manager;
$manager->name = "Rizqi";
$manager->sayHello("Adi");

$employee = new Employee;
$employee->name = "Rizqi";
$employee->sayHello("Joko");