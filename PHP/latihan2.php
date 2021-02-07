<?php
//materi 2 yaitu
//sintax php

//stantart output
//echo, print
//print_r
//var_dump

echo "Meiman jaya Gea <br>";
print "Meiman jaya Gea <br>";
print_r("Meiman jaya Gea <br>");
var_dump("Meiman jaya Gea <br>");

//penulisan sinta php
//1. php di dalam HTML
//2. HTML di dalam PHP


//variabel dan tipe data
// variabel
//tidak boleh diawali dengan angka, tapi boleh mengandung angka
$nama = "Jaya Gea";
echo "Hallo, Nama saya $nama";


//Operator
//1. aritmatika + - * / %
$n = 10;
$m = 21;

echo $n + $m;

//2. penggabung string / concatenation /concat
$nama_depan = "Meiman";
$nama_belakang = "jaya";
echo $nama . " " . $nama_belakang;

//Assignment : =, +=, -= , *=, /=, %=, .=
$x = 1;
$v -= 5; //assignment +5
echo $x;

//perbandingan : <, >, <=, >=, ==,!=

var_dump(5 > 2);

//identitas
// ===, !==
var_dump(5 === "2");

// logika
// &&, ||, !
$x = 10;
var_dump($x < 20 && $x % 2 == 0);
var_dump($x < 20 || $x % 2 == 0);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Hellow, Selamat Datang <?php echo "Jaya" ?> </h1>

    <?php
    echo "<h2>Hellow, Selamat datang Jaya</h2>"
    ?>
</body>

</html>