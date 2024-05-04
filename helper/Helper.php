<?php

namespace Helper;

class MathHelper
{
    // mayoritas penggunaan static function atau properties adalah untuk kelas helper atau utility 
    // karena tidak butuh di instansiasi terlebih dahulu

    // jika sudah menggunakan static maka saat mengakses properties atau function tidak bisa lagi menggunakan object tetapi menggunakan class
    static public string $name = "MathHelper";

    // function static bisa langsung diakses dari class nya tanpa harus membuat objectnya dan tidak bisa memanggil function lain 
    // yang bukan static
    static public function sum(int ...$numbers): int
    {
        $total = 0;
        foreach ($numbers as $number) {
            $total += $number;
        }
        return $total;
    }
}
