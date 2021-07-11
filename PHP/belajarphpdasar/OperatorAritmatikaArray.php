<?php
$first = [
    "first_name" => "Meiman",
    "last_name" => "Jaya",
];

$last = [
    "first_name" => "Joko",
    "last_name" => "Handoko",
];

$fulla = $first + $last;
var_dump($fulla);

$fullb = $last + $first;
var_dump($fullb);


var_dump($first == $last);

var_dump($first === $last);