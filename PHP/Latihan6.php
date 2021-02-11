<?php
//Array sebuah variabel yg dapat memiliki banyak nilai
//nilai/elemen pada array boleh memiliki tipe data yang berbeda 
// membuat array 
//cara lama
$hari = array("senin", "selasa", "Rabu");
//cara baru
$bulan = ["Januari", "Februari", "Maret", "April"];

//menampilkan array
// var_dam dan print_r()

// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br> ";
//menampilkan 1 elemen pada array

// echo $hari[2];

//Menambahkan 1 elemen pada array
// var_dump($hari);
// $hari[] = "Kamis";
// echo "<br> ";
// var_dump($hari);


//menampilkan array yang benar
//Pengulangan pada array
//for/ foreach
$angka = [3, 4, 35, 33, 2, 21, 87, 36, 100, 20];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihant</title>
    <style>
        .kotak {
            width: 100px;
            height: 100px;
            background-color: salmon;
            text-align: center;
            line-height: 100px;
            margin: 3px;
            float: left;
        }
    </style>
</head>

<body>

    <?php for ($i = 0; $i < count($angka); $i++) { ?>

        <div class="kotak"><?php echo $angka[$i]; ?></div>

    <?php } ?>

    <div class="clear"></div>

    <?php foreach ($angka as $a) { ?>
        <div class="kotak"><?php echo $a; ?></div>
    <?php } ?>

    <?php foreach ($angka as $a) : ?>
        <div class="kotak"><?= $a; ?></div>
    <?php endforeach; ?>
</body>

</html>