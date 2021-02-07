<?php
//Pengulangan 
// for, while, do while, foreach (Pengulangan Harus array)
//Pengkondisian
//if.. else
//if.. else if.. else
//ternary
//switch

//Pengulangan
//for 
for ($i = 0; $i < 5; $i++) {
    echo "Hello World <br>";
}

//while
$i = 0;
while ($i < 5) {
    echo " Hellow World <br>";
    $i++;
}

//do.. while
$x = 0;
do {
    echo " Hellow World <br>";
    $x++;
} while ($x < 5);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan3</title>
</head>

<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php
        for ($i = 1; $i <= 3; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= 5; $j++) {
                echo "<td>$i,$j</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
    <br>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for ($i = 1; $i <= 3; $i++) : ?>
            <tr>
                <?php for ($j = 1; $j <= 5; $j++) : ?>
                    <td><?= "$i,$j"; ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>

</html>

<?php
//Pengkondisian/Percabangan
//if else
echo "pengkondisian : <br>";
$x = 10;
if ($x < 20) {
    echo "benar <br>";
} else {
    echo "salah <br>";
}

//if else if else 
$x = 19;
if ($x < 20) {
    echo "benar <br>";
} else if ($x == 20) {
    echo "bingo <br>";
} else {
    echo "salah <br>";
}
// ternary 
// switch

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan3</title>
    <style>
.hijau{
    background-color: green;
}
.blue{
    background-color: cadetblue;
}
    </style>
</head>

<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for ($i = 1; $i <= 5; $i++) : ?>
            <?php if ($i % 2 == 1) : ?>
                <tr class="hijau">
                <?php else : ?>
                <tr class="blue">
                <?php endif; ?>
                <?php for ($j = 1; $j <= 5; $j++) : ?>
                    <td><?= "$i,$j"; ?></td>
                <?php endfor; ?>
                </tr>
            <?php endfor; ?>
    </table>
</body>

</html>