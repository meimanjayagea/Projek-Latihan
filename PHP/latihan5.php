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
