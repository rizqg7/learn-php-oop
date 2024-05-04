<?php

trait A
{
    function doA(): void
    {
        echo "a" . PHP_EOL;
    }
    function doB(): void
    {
        echo "b" . PHP_EOL;
    }
}

trait B
{
    function doA(): void
    {
        echo "A" . PHP_EOL;
    }
    function doB(): void
    {
        echo "B" . PHP_EOL;
    }
}

class Sample
{
    use A, B // jika seperti ini akan terjadi trait conflict
    // jika sudah terlanjur terjadi trait conflict maka bisa memakai :
    {
        A::doA insteadof B; // artinya A akan memakai doA daripada B
        B::doB insteadof A;
    }
}

$sample = new Sample();
$sample->doA();
$sample->doB();