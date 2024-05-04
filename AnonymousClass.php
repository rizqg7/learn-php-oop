<?php
use Data\one\Conflict;

interface HelloWorld
{
    function sayHello(): void;
}

// anonymous class (tanpa nama). biasanya digunakan untuk membuat object interface atau abstracet class
$helloWorld = new class ("Rizqi") implements HelloWorld 
{
    public string $name;
    
    // constructor di Anonymous Class
    public function __construct(string $name){
        $this->name = $name;
    }

    public function sayHello(): void 
    {
        echo "Hello $this->name" . PHP_EOL;
    }
};

$helloWorld->sayHello();
