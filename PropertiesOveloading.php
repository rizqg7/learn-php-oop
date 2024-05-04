<?php

class Zero
{
    // dynamic properties
    private array $properties = [];
    // Dipanggil ketika mencoba untuk mengakses properti yang tidak ada dalam sebuah kelas. Dengan metode ini, bisa menentukan
    // apa yang harus dikembalikan jika properti tidak ada.
    public function __get($name) // untuk mengambil data berdasarkan properti name nya
    {
        return $this->properties[$name];
    }
    // Dipanggil ketika mencoba untuk mengatur nilai ke properti yang tidak ada dalam sebuah kelas. Dengan metode ini, 
    // bisa menentukan apa yang harus di set dengan nilai yang diberikan.
    public function __set($name, $value) // untuk mengubah data berdasarkam properti name nya
    {
        $this->properties[$name] = $value;
    }
    // Dengan metode ini bisa menentukan apakah properti tersebut ada atau tidak.
    public function __isset($name): bool // untuk mengecek apakah sudah di set berdasarkan properti namenya
    {
        return isset($this->properties[$name]);
    }
    // Dengan metode ini, bisa menentukan apa yang harus dilakukan ketika properti dihapus.
    public function __unset($name) // untuk meng unset berdasarkan properti name nya
    {
        unset($this->properties[$name]);
    }
    // dipanggil ketika sebuah object mencoba memanggil method yang tidak ada. 
    public function __call($name, $arguments)
    {
        $join = join(",", $arguments);
        echo "Call function $name with arguments $join" . PHP_EOL;
    }
    //  mirip dengan __call, tetapi dipanggil ketika method static yang tidak ada dipanggil pada kelas.
    public static function __callStatic($name, $arguments)
    {
        $join = join(",", $arguments);
        echo "Call static function $name with arguments $join" . PHP_EOL;
    }

}

$zero = new Zero();
$zero->firstName = "Ahmad";
$zero->middleName = "Rizqi";
$zero->lastName = "Abdilah";

echo "First Name: $zero->firstName" . PHP_EOL;
echo "Middle Name: $zero->middleName" . PHP_EOL;
echo "Last Name: $zero->lastName" . PHP_EOL;

$zero->sayHello("Rizqi", "Abdilah");
Zero::sayHello("Rizqi", "Abdilah"); 