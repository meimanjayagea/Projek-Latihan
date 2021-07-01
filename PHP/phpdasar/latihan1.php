<?php
//Perulangan
//for
// while
//do.. while
// foreach : pengulangan khusus array

// for ($i=0; $i < 5; $i++) { 
//     echo "Hellow World <br>";
// }

// $a = 0;
// while ($a <= 10) {
//     echo "Hello World  <br>";
//     $a++;
// }

// $a = 0;
// do {
//     echo 'Hello World';
//     $a++;
// } while ($a <= 5);

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
    <table class="table">
        <?php 
                for ($i=1; $i <=3; $i++) { 
                    echo "<tr>";
                    for ($j=1; $j < 5 ; $j++) { 
                        echo "<td> $i, $j </td>";
                    }
                    echo "</tr>";

                }
        ?>
    </table>

    <table class="table">
        <?php for($i = 0; $i <=5; $i++) : ?>

        <tr>
            <?php for ($j=0; $j <=5 ; $j++) : ?>
            <td>
                <?= "$i, $j"; ?> </td>
            <?php endfor; ?>
        </tr>
        <?php endfor; ?>
    </table>

</body>

</html>