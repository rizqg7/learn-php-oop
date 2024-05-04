<?php
require_once "data/Category.php";
$category = new Category();
$category->setName("Handphone");
$category->setExpensive(true);

// jika tidak ada validasi pada setter maka secara best practices dapat dikatakan masih belum memenuhi standar
// karena bisa saja user men set hanya string kosong 
$category->setName(" "); // jika sudah diberi validasi maka di set menjadi "" pun default value 
echo "Name : {$category->getName()}" . PHP_EOL;
echo "Expensive : {$category->isExpensive()}" . PHP_EOL;