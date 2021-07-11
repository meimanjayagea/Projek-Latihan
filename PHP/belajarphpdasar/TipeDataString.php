<?php
echo 'Nama : ';
echo 'Meiman Jaya Gea';
echo "\n";

echo "Nama : ";
echo "Meiman\t Meiman\t Jaya\n";

//heredoc untuk membuat Stirng yang panjang
echo <<<MAN
selamat Belajar PHP,
sekarang , Kita belajar tipe data string
ini adalah cara ke-3 membuat string
bisa menggunakan heredoc
MAN;

//Nowdoc
echo <<<'MAN'
selamat Belajar PHP,
sekarang , Kita belajar tipe data string
ini adalah cara ke-3 membuat string
bisa menggunakan heredoc
MAN;