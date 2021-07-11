<?php
// tipe data number

echo "Decimal :";
var_dump(1234);

echo "octal :";
var_dump(01234);

echo "Hexadecimal :";
var_dump(0x1A);

echo "Binary :";
var_dump(0b111111);

echo "Underscore in Number :";
var_dump(1_243_234_343);

echo "Floting Point :";
var_dump(1.234);

echo "Floting Point dengan E notation plus (1.2 x 1000) : ";
var_dump(1.7e3);

echo "Floting Point dengan E notation munis (7 x 0.0001) :";
var_dump(1.7e-3);

echo "underscore di Floating Point";
var_dump(1_234.343);

echo "Integer Oferflow :"; //batas maximal tipedata integer
var_dump(9223372036854775807);