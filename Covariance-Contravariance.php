<?php

require_once "data/Animal.php";
require_once "data/Food.php";
require_once "data/AnimalShelter.php";

// kalau contravariance dari childnya dijadikan parent kalau covariance dari parentnya menjadi child

$catShelter = new \Data\CatShelter();
$cat = $catShelter->adopt("Catty");
$cat->eat(new \Data\AnimalFood);

$dogShelter = new \Data\DogShelter();
$dog = $dogShelter->adopt("Doggy");
$dog->eat(new \Data\Food);
