<?php
/* Note : Perlu diketahui bahwa penulisan indeks tidak selalu dalam 
bentuk angka tetapi juga bisa dalam bentuk karakter atau string. 
Penggunaan Kata kunci berupa nama atau string dimaksudkan untuk 
memudahkan pemanggilan dibandingkan menggunakan nomor*/

// $datadiri["nama"] = "Meiman Jaya Gea";
// $datadiri["goldarah"] = "B";
// $datadiri["alamat"] = "Yogyakarta";

# membuat array datadiri
$datadiri = [ 
    "nama" => "Meiman Jaya Gea", 
    "goldarah" => "B",
    "alamat" => "Yogyakarta"
];

#menampilkan array Asosiatif
echo "Nama : " . $datadiri["nama"] . "<br>";
echo "Golongan Darah : " . $datadiri["goldarah"] . "<br>";
echo "Alamat : " . $datadiri["alamat"] . "<br>";

//Menampilkan seluruh informasi array dan type data setiap index 
var_dump($datadiri);

?>