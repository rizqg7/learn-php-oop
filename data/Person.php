<?php
class Person
{
    // inisialisasi constant variable sebaiknya menggunakan huruf uppercase
    const AUTHOR =  "Rizqi Abdilah";
    // deklarasi properties / fields kedalam class menggunakan "var"
    // di properties bisa membuat type declaration 

    var string $name;
    var string $address;
    // di properties juga bisa menetapkan default value 
    var string $country = "Indonesia";
    // di properties juga bisa mengirim tipe data null dengan menambahkan "?" sebelum type declaration
    var ?string $religion = null;
    // deklarasi function didalam class
    function sayHello(string $name)
    {
        echo "Hello " . $name . PHP_EOL;
    }
    // implementasi keyword "this" didalam function
    function welcome(?string $name)
    {
        if (is_null($name)) {
            echo "Welcome, my name is $this->name " . PHP_EOL;
        } else {
            echo "Welcome $name, my name is $this->name" . PHP_EOL;
        }
        // terdapat perbedaan pemanggilan "name" dengan atau tidak menggunakan "$this->..."
        // jika menggunakan "$properties" maka mengacu ke parameter dari function argumen
        // jika menggunakan "$this->..." maka mengacu pada object yang dibuat
    }
    function info (){
        // karena function info berada didalam class yang sama maka untuk mempermudah untuk diakses bisa menggunakan keyword "self"
        echo "AUTHOR : " . self::AUTHOR . PHP_EOL;
    }

    // constructor function
    // jika constructor function di deklarasikan dan memiliki parameter maka seluruh instansiasi object person() wajib diberikan parameter juga
    //
    // function __construct(string $name, ?string $address){
    //     $this->name = $name;
    //     $this->address = $address;
    // }

    // destructor function
    function __destruct(){
        echo "Object Person $this->name is Destroyed " . PHP_EOL;
    }
}