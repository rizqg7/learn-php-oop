<?php

class Programmer
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}

class BackendProgrammer extends Programmer
{

}
class FrontendProgrammer extends Programmer
{

}

class Company
{
    // polymorphism dapat berubah - ubah bentuk terhadap class dari child dari parent   
    public Programmer $programmer; // disini properties di set menjadi public class programmer dan bisa mendapatkan child milik class tsb
}

// function argument di polymorphism
function sayHelloProgrammer(Programmer $programmer) // set tipe data programmer 
{
    // dalam object kita dapat melakukan pengecekan tipe data menggunakan "instanceof"
    if($programmer instanceof BackendProgrammer) {
        echo "Hello Backend programmer $programmer->name" . PHP_EOL;
    }
    else if($programmer instanceof FrontendProgrammer){
        echo "Hello Frontend programmer $programmer->name" . PHP_EOL;
    }
    else if ($programmer instanceof Programmer) {
        echo "Hello Programmer $programmer->name" . PHP_EOL;
    }
}