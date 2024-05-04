<?php

$matches = [];
// mencari match pattern dengan function "preg_match" dengan format "preg_match_all("/nama yang ingin dicari|atau/case insensitive atau tidak", "letak kata", $)"
$result = preg_match_all("/AHMAD|rizqi|aBdIlAh/i", "Ahmad Rizqi Abdilah", $matches); 
var_dump($result);
var_dump($matches);

// preg replace format "preg_replace("/nama yang ingin dicari|atau/case insensitive atau tidak", "direplace dengan apa", "letak kata", $)"
$result = preg_replace("/anjing|bangsat/i", "***", "dasar lu anjing dan bangsat");
var_dump($result);

// preg_split format "/[isi sesuai tanda baca apa yang ingin di split]/", "letak kata"
$result = preg_split("/[\s, -]/", "Ahmad Rizqi Abdilah, Programmer Zaman-Now");
var_dump($result);