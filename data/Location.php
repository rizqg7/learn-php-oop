<?php
namespace Data;
abstract class Location // ketika class sudah di set menjadi abstract maka sudah tidak bisa lagi dibuat object secara langsung
{
    public string $name;
}

abstract class Country extends Location {} 

class Province extends Location {} // hanya turunan nya yang tidak di set menjadi abstract yang bisa dibuat object


