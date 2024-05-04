<?php
require_once "data/Student.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "Rizqi";
$student1->value = 100;

$student2 = new Student();
$student2->id = "1";
$student2->name = "Rizqi";
$student2->value = 100;

// comparing seluruh property didalam object
// menggunakan operator equals : true karena seluruh propertynya sama
var_dump($student1 == $student2); 
// menggunakan operator identity : false karena student 1 dan student 2 walaupun menggunakan property yang sama tapi secara objek
// merupakan objek yang berbeda`
var_dump($student1 === $student2); 
var_dump($student1 === $student1); // ini baru true
