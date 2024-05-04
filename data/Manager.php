<?php
class Manager
{
    var $name;

    function sayHello(string $name): void
    {
        echo "Hello $name my name is $this->name" . PHP_EOL;
    }
}

// class employee mendapatkan turunan dari manager 
class Employee extends Manager 
{

}