<?php
$Values = array(1, 2, 43, 56, 6, 3, 3.4);
var_dump($Values);

$names = ['Meiman', 'Jaya', 'Gea'];
var_dump($names);

//mengakses array
var_dump($names[1]);

//menambahan sesuai index
$names[0] = "Joko";
var_dump($names);

//menghapus Array
unset($names[2]);
var_dump($names);

//menambahkan data dibelkang 
$names[] = "Parangin-angin";
var_dump($names);

//menghitung total array
var_dump(count($names));