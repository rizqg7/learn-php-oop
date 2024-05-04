<?php
class Category
{
    private string $name;
    private bool $expensive;
    // tipe data string
    public function getName(): string // getter
    {
        return $this->name;
    }
    public function setName(string $name): void // setter
    {
        // validasi pada setter
        if (trim($name) != "") {
            $this->name = $name;
        }
    }

    // tipe data boolean
    public function isExpensive(): bool // getter
    {
        return $this->expensive;
    }
    public function setExpensive(bool $expensive): void // setter
    {
        $this->expensive = $expensive;
    }
}