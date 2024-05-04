<?php
require_once "data/Animal.php";

use Data\{Animal, Cat, Dog};

$cat = new Cat();
$cat->name = "Yogi";
$cat->run();

$dog = new Dog();
$dog->name = "Michael";
$dog->run();