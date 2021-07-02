<?php
// $_GET
// $_POST

$datadiri = [
    [
        "nama" => "Meiman Jaya Gea",
        "goldarah" => "B",
        "alamat" => "Yogyakarta",
        "pendidikan" => "SI",
        "gambar" => "/img/1.jpg",
    ],
    [
        "nama" => "Lestarius Gea",
        "goldarah" => "B",
        "alamat" => "Pekanbaru",
        "pendidikan" => "D3",
        "gambar" => "/img/2.jpg",
    ]
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get & Post</title>
</head>

<body>
    <ul>
        <?php foreach ($datadiri as $dd) : ?>
        <li>
            <a href="get2.php?nama=<?= $dd["nama"]; ?>
                &goldarah=<?= $dd["goldarah"]; ?>
                &alamat=<?= $dd["alamat"]; ?>
                &pendidikan=<?= $dd["pendidikan"]; ?>
                &gambar=<?= $dd["gambar"]; ?>"><?= $dd["nama"]; ?></a>
        </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>