<?php

namespace Data;
require_once "Animal.php";

interface AnimalShelter
{
    function adopt(string $name): Animal;
}

class CatShelter implements AnimalShelter
{   
    // fitur covariance. bisa me return tipe data yang lebih spesifik pada function child 
    public function adopt(string $name): Cat 
    {
        $cat = new Cat();
        $cat->name = $name;
        return $cat;
    }
}

class DogShelter implements AnimalShelter
{
    public function adopt(string $name): Dog
    {
        $dog = new Dog();
        $dog->name = $name;
        return $dog;
    }
}

