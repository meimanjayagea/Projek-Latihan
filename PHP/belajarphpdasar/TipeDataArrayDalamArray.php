<?php
//array MAP
$meiman = array(
    "id" => "Meiman",
    "name" => "Meiman Jaya Gea",
    "age" => 26,
    "address" => array(
        "city" => "Yogyakarta",
        "Country" => "Indonesia",
    )
);

var_dump($meiman);
var_dump($meiman["address"]["Country"]);

$budi = [
    "id" => "budi",
    "name" => "Budi Kurnia",
    "age" => 26,
    "address" => [
        "city" => "Yogyakarta",
        "Country" => "Indonesia",
    ]
];

var_dump($budi);
var_dump($meiman["address"]["Country"]);