<?php

$name = "Meiman";
$name = null;

$age = null;

echo "Name : ";
echo $name;
echo "\n";

echo "Age : ";
echo $age;
echo "\n";

//pengcekan value variabel null
echo "Is Name Null : ";
var_dump(is_null($name));
echo "\n";

echo "Is Age Null : ";
var_dump(is_null($age));
echo "\n";

//menghapus variable
$Contoh =" Meiman";
unset($contoh);
echo $contoh;

//pengecekan ada atau tidak variable

$nama = " Meiman";
var_dump(isset($nama));
echo $nama;