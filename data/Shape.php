<?php

namespace Data;

class Shape
{
    // function milik parent
    public function getCorner()
    {
        return 10;
    }
}

class Rectangle extends Shape
{
    // function milik child
    public function getCorner()
    {
        return 4;

    }
    public function getChildCorner()
    {
        return $this->getCorner(); // jika ingin mengakses data dari function getCorner()
    }
    public function getParentCorner()
    {
        // kata kunci parent hanya bisa diakses di class child / turunan dari parent class nya
        return parent::getCorner(); // jika ingin mengakses data dari parent
    }

}