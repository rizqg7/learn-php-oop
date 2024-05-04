<?php
require_once "data/Shape.php";

use DATA\{Shape, Rectangle};

$shape = new Shape();
echo $shape->getCorner() . PHP_EOL; // mengakses function milik parent

$rectangle = new Rectangle();
echo $rectangle->getChildCorner() . PHP_EOL; // m engakses function milik child
echo $rectangle->getParentCorner() . PHP_EOL; // mengakses function milik parent