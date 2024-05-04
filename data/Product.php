<?php

class Product
{
    // jika di set private tidak bisa diakses dari luar class maupun child nya
    // set menjadi protected atau public agar bisa diakses keluar class
    private string $name;
    private int $price;
    
    // agar bisa membuat object dari luar class maka constructor nya harus di set menjadi public 
    public function __construct(string $name, int $price)
    {
        $this->name = $name;
        $this->price = $price;
    }
    // disini function getname() dan getprice() digunakan hanya untuk mengambil data dari name dan price, tidak bisa untuk mengubah data 
    public function getName()
    {
        return $this->name;
    }
    public function getPrice()
    {
        return $this->price;
    }
}

// child class Product
class ProductDummy extends Product 
{
    public function info()
    {
        // undefined jika properties tsb. di parent class di set private
        echo "Name $this->name" . PHP_EOL; 
        echo "Name $this->price" . PHP_EOL;
    }
}