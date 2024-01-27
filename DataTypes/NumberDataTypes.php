<?php

//Tipe data integer
echo "Decimal: ";
var_dump(12.34);
echo "Octal: ";
var_dump(0123);
echo "Hexadecimal: ";
var_dump(0x1A);
echo "Binary: ";
var_dump(01010001);
echo "Underscore in a number: ";
var_dump(1_234_567);

//Tipe data floating point
echo "Floating point: ";
var_dump(1.999);
echo "Floating point with E notation plus (1.2 x 1000):";
var_dump(1.2e3);
echo "Floating point with E notation minus (7 x 0.001):";
var_dump(7e-3);
echo "Underscore in a floating point: ";
var_dump(1_234.567);

// Integer overflow data types
echo "Overflow 32 bit integer : ";
var_dump(2147483648);
echo "Overflow 64 bit integer : ";
var_dump(199906111990611);
