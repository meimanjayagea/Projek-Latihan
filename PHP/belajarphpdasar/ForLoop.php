<?php

for ($i = 0; $i < 10; $i++) {
    echo "Hitung dari : $i" . PHP_EOL;
}

for ($B = 10; $B >= 1; $i--) {
    echo "Hitung dari : $i" . PHP_EOL;
}

//alternatif forloop
for ($i = 0; $i < 10; $i++) :
    echo "Hitung dari : $i" . PHP_EOL;
endfor;