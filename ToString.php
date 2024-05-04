<?php
require_once "data/Student.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "Rizqi";
$student1->value = 100;

// wajib implementasi to string di class student
$string = (string) $student1;
echo $string . PHP_EOL;