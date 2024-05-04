<?php

class Data implements IteratorAggregate // interface bawwan php
{
    var string $first = "first";
    public string $second = "second";
    private string $third = "third";
    protected string $fourth = "fourth";

    public function getIterator() // wajib mengemmbalikan object iterator 
    // direkomendasikan menggunakan arrayiterator karena bisa mengitertasi menggunakan perulangan tanpa membuat secara manual
    // pembuatan iterator secara manual
    {
    //     $array = [
    //         // data - data yang ingin dikeluarkan 
    //         "first" => $this->first,
    //         "second" => $this->second,
    //         "third" => $this->third,
    //         "fourth" => $this->fourth,
    //     ];

    //     return new ArrayIterator($array);

    // menggunakan yield karena lebih simple
    // jika butuh key dan value
    yield "first" => $this->first;
    yield "second" => $this->second;
    yield "third" => $this->third;
    yield "fourth" => $this->fourth;

    }
}

$data = new Data(); 
// melakukan iterasi setiap data yang ada didalam object. namun karena mengakses dari luar maka hanya data yang bersifat
// public yang hanya bisa di iterasi 
foreach ($data as $property => $value) {
    echo "$property : $value" . PHP_EOL;
}