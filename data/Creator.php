<?php
class Creator
{
    var string $title;
    // arguments di constructor boleh di override  
    public function __construct(string $name = "", string $title = "Creator") // default value 
    {
        $this->name = $name;
        $this->title = $title;
    }
    var $name;
    // function milik creator
    function sayHello(string $name): void
    {
        echo "Hello $name my Name is Creator $this->name " . PHP_EOL;
    }
}

class Viewer extends Creator
{
    // deklarasi ulang / override constructor function dengan 1 parameter
    public function __construct(string $name = '')
    {
        parent::__construct($name, "Viewer"); // direkomendasikan untuk memanggil constructor yang ada di parent nya
        //  agar jika ada kode lain saat pertama kali pembuatan object nya bisa terpanggil
    }
    // function milik Viewer 
    function sayHello(string $name): void // override function dengan mengubah arguments tidak direkomendasikan
    {
        echo "Hello $name my Name is Viewer $this->name " . PHP_EOL;
    }
}