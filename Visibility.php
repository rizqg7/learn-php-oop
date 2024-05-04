<?php
require_once "data/Product.php";
// instansiasi product 
$product = new Product("Apple", 20000);
// untuk mengambil data dari name dan price maka bisa menggunakan public function yang telah dibuat
echo $product->getName() . PHP_EOL;
echo $product->getPrice() . PHP_EOL;
// undefined karena di set private
$dummy = new ProductDummy("Mac", 2000);
$dummy->info();


