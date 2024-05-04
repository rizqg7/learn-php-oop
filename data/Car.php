<?php
namespace Data;

// materi interface inheritance
interface HasBrand
{
    function getBrand(): string;
}
interface IsMainternance
{
    function isMainternance(): bool;
}


// interface secara default sudah ter set menjadi abstract
interface Car extends HasBrand // jika sebuah interface ingin implement dari interface yang lain itu boleh  
//  
{
    // method dibawah adalah sebagai contract jika ada class yang ingin implementasi dari Car harus implement juga
    // interface juga mendukung multiole inheritance, selain itu interface juga bisa digunakan untuk polimorphims

    function drive(): void;
    function getTire(): int;
}

class Avanza implements Car, IsMaintenance // interface boleh implements lebih dari 1 Parent kalau abstract hanya boleh 1
{
    public function drive(): void
    {
        echo "Drive Avanza" . PHP_EOL;
    }
    public function getTire(): int
    {
        return 4;
    }
    // menggunakan "extends". Maka selanjutnya class yang implement interface ini "Car" harus implement juga semua properties 
    // ataupun method dari parent interface "Car"
    public function getBrand(): string // method dari parent HadBrand
    {
        return "Toyota";
    }
    public function isMaintenance(): bool // method dari parent isMaintenance
    {
        return false;
    }
}
