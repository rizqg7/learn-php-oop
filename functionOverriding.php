<?php
require_once "data/Creator.php";

$creator = new Creator();
$creator->name = "Rizqi";
$creator->sayHello("Budi"); // mengakses function milik parent (creator)


$viewer = new Viewer();
$viewer->name = "Joko";
// ketika function dibuat lagi di child(user) maka akan menimpa yang ada di parent class nya
$viewer->sayHello("Budi"); // // mengakses function milik child (viewer)

