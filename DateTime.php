<?php
$dateTime = new DateTime();
$dateTime->setDate(2000, 1, 30);
$dateTime->setTime(12, 12, 12);


$dateTime->add(new DateInterval("P1Y")); // untuk membuat duration harus diawali dengan karakter "P" yang artinya period  

$dateInterval = new DateInterval("P2Y");
$dateInterval->invert = 1; // jika ingin mengurangi waktu nya bisa memanggil invert lalu di set true/1 

$dateTime->add($dateInterval);

var_dump($dateTime);


// Timezone
$now = new DateTime();
var_dump($now);
$now->setTimeZone(new DateTimeZone("America/Santiago")); // mengganti zona waktu bisa menggunakan setTimeZone(new DateTimeZone()
var_dump($now);


// Format Date Time
$string = $now->format("Y-m-d H:i:s");
echo "Waktu saat ini : $string " . PHP_EOL;

// parse DateTime
$date = DateTime::createFromFormat("Y-m-d H:i:s", "2000-01-30 12:12:12", new DateTimeZone("Asia/Jakarta"));
if ($date){
    var_dump($date);
}
else{
    echo "Format salah" . PHP_EOL;
}