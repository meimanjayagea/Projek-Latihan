<?php
$mahasiswa = [
    ["Jaya", "082398238789", "Teknik Informartika", "jayameiman@#meimail.com"],
    ["Ja6hmxma", "082356238789", "Tekjhj,Informartika", "jamnvmbcdsman@#meimail.com"]
];

$mahas = ["J234a", "0823932338789", "Teknik industri", "jayameiman@#meimail.com"];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswat</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
        <li><?= $mhs ?></li>
        <?php endforeach; ?>
    </ul>
    <br>
    <?php foreach ($mahas as $mhs) : ?>
    <ul>
        <li><?= $mahas[0] ?> </li>
        <li><?= $mahas[1] ?> </li>
        <li><?= $mahas[2] ?> </li>
        <li><?= $mahas[3] ?> </li>;
    </ul>
    <?php endforeach; ?>


</body>

</html>