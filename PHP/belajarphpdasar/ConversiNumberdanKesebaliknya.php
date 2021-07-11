<?php
$valueString = (string)100;
var_dump($valueString);

$valueInt = (int)"100";
var_dump($valueInt);

$valueFloat = (float)"100.11";
var_dump($valueFloat);

//Mengakses array karakter
$nama = "Meiman";
echo $nama[0] . PHP_EOL;
echo $nama[1] . PHP_EOL;
echo $nama[2] . PHP_EOL;
echo $nama[3] . PHP_EOL;
echo $nama[4] . PHP_EOL;

//Variable Parsing
echo "Hello $nama, Selamat Belajar PHP" . PHP_EOL;

//CurlyBrace
echo "Hello {$nama} Jaya Gea, Selamat Belajar PHP" . PHP_EOL;