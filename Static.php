<?php
require_once "helper/Helper.php";

use Helper\MathHelper;
$mathHelper = new MathHelper;

// echo MathHelper->$name . PHP_EOL; error, tidak bisa mnengakses property via object
echo MathHelper::$name . PHP_EOL;
MathHelper::$name = "Rizqi Abdilah" . PHP_EOL; // bisa dirubah
echo MathHelper::$name . PHP_EOL;

$result = MathHelper::sum(10, 20, 30);
echo "result is $result";