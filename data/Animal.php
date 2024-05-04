<?php
namespace Data;

require_once "Animal.php";

abstract class Animal
{
    public string $name;
    // siapapun child dari class Animal wajib mengimplementasi function abstract yang telah dibuat
    abstract public function run(): void; // Saat membuat sebuah abstract function, tidak boleh membuat block function untuk function tersebut

    // class childnya juga harus mengoverride class function ini
    abstract public function eat(AnimalFood $animalFood): void; // contravariance

}

class Cat extends Animal
{
    public function run(): void
    {
        echo "Cat $this->name is running" . PHP_EOL;
    }

    public function eat(AnimalFood $animalFood)
    {
        echo "Cat is eating" . PHP_EOL;
    }
}

class Dog extends Animal
{
    public function run(): void
    {
        echo "Dog $this->name is running" . PHP_EOL;
    }

    public function eat(Food $animalFood) // implementaso  Contravariance
    {
        echo "Dog is eating" . PHP_EOL;
    }
}
