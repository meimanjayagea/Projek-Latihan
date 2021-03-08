<?php
//date php
// echo date("l, j-M-Y <br>"); //Untuk Menampilkan tanggal dengan format tertentu

//time php
//UNIX Timestamp / EPOCH time
//detik yang berlalu sejak 1 januari 1970
// echo time();

echo date("l, d-M-Y", time() - 60 * 60 * 24 * 100);

echo "<br>";
//membuat sendiri detik
//jam, menit, detik, bulan,tanggal, tahun
echo date("l", mktime(0, 0, 0, 5, 17, 1997));

//Strtodate
echo date("l", strtotime("25 aug 1986"));

//membuat function 
function salam($waktu = "datang", $nama ="Admin"){
    return "Selamat $waktu, $nama!";
}
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
    <h1><?= salam("Siang","Jaya"); ?></h1>
</body>
</html>