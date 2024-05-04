<?php

namespace Data\Traits;

trait SayHello
{
    public string $name;

    public function hello(?string $name): void // boleh berisi konkrit function / abstract function
    {
        if (is_null($name)) {
            echo "hello" . PHP_EOL;
        } else {
            echo "hello $name" . PHP_EOL;
        }

    }
    public function sayWelcome(?string $name): void
    {
        if (is_null($name)) {
            echo "Welcome" . PHP_EOL;
        } else {
            echo "Welcome $name" . PHP_EOL;
        }
    }
}

trait SayGoodbye
{
    public string $name;

    public function goodBye(?string $name): void // boleh berisi konkrit function / abstract function
    {
        if (is_null($name)) {
            echo "Goodbvye" . PHP_EOL;
        } else {
            echo "Goodbye $name" . PHP_EOL;
        }

    }
}

trait HasName
{
    // property pada trait
    public string $firstName = '';
}

trait CanRun
{
    public abstract function run(): void;
}


class ParentPerson
{
    // jika hanya function hanya ada di trait dan di parent maka yang ada di parent yang akan di override oleh trait
    // jika function ada di tiga-tiga nya maka yang paling diprioritaskan adalah yang ada di child class nya
    public function sayWelcome(?string $name): void
    {
        if (is_null($name)) {
            echo "Welcome in ParentPerson" . PHP_EOL;
        } else {
            echo "Welcome in ParentPerson $name" . PHP_EOL;
        }
    }
}

trait All
{ // trait inheritance
    use SayGoodbye, SayHello, HasName, CanRun {

    }
}

class Person extends ParentPerson
{ // penggunaan trait menggunakan kata kunci "use", semua yang ada di dalam trait akan di include 
    // saat sebuah trait yang memiliki abstract function dan di include kedalam class turunan nya maka harus di override didalam class
    # use SayGoodbye, SayHello, HasName, CanRun {
    // trait visibility override
    // SayGoodbye as private;
    // HasName as private;
    #}

    // trait inheritance
    use All;

    public function run(): void // override abstract function
    {
        echo "Person {$this->name} is runing " . PHP_EOL;
    }

    // didalam child class jika terjadi override function yang ada sudah ada didalam trait maka akan di prioritaskan yang
    // ada didalam child class. 
    public function goodBye(?string $name): void
    {
        echo "Good bye in person" . PHP_EOL;
    }

    public function hello(?string $name): void
    {
        echo "Hello in person" . PHP_EOL;
    }

    public function sayWelcome(?string $name): void
    {
        if (is_null($name)) {
            echo "Welcome in Person" . PHP_EOL;
        } else {
            echo "Welcome in Person $name" . PHP_EOL;
        }
    }
}