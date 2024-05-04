<?php

// pembuatan secara manual menggunakan array tidak disarankan karena ribet
function getGenap(int $max): iterator
{
    $array = [];
    for ($i = 1; $i <= $max; $i++) {
        if ($i % 2 == 0) {
            $array[] = $i;
        }
    }
    return new ArrayIterator($array);
}
foreach (getGenap(100) as $value) {
    echo "Genap : $value" . PHP_EOL;
}

// ketika membuat iterator menggunakan yield lebih disarankan karena tidak perlu menggunakan array 
function getGanjil(int $max): iterator
{
    for ($i = 1; $i <= $max; $i++) {
        if ($i % 2 == 1) {
            yield $i; // jika butuh value saja 
        }
    }
}
foreach (getGanjil(100) as $value) {
    echo "Ganjil : $value" . PHP_EOL;
}