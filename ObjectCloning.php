<?php
require_once "data/Student.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "Rizqi";
$student1->value = 100;
$student1->setSample("ini sample");

var_dump($student1);
$student2 = clone($student1); // clone semua properties dengan visibility apapun dari student 1 (best practices)
var_dump($student2);
