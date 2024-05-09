<?php

/**
 * Di PHP terdapat 2 jenis tipe data number
 * ● (int) Bilangan bulat decimal (base 10), hexadecimal (base 16), octa (base 8), binary (base 2) dan
 * ● (float) Bilangan pecahan
 */

// type int
echo "Decimal : ";
var_dump(1234); // Decimal : int(1234)

echo "Octal : ";
var_dump(01234); // Octal : int(668)

echo "Hexadecimal : ";
var_dump(0x1A); // Hexadecimal : int(26)

echo "Binary : ";
var_dump(0b11111111); // Binary : int(255)

echo "Underscore di Number : ";
var_dump(1_000_000); // Underscore di Number : int(1000000)

// type float
echo "Floating Point : ";
var_dump(1.234); // Floating Point : float(1.234)

echo "Floating Point dengan E notation Plus (1.2 x 1000) : ";
var_dump(1.2e3); // Floating Point dengan E notation Plus (1.2 x 1000) : float(1200)

echo "Floating Point dengan E notation Minu (7 x 0.001) : ";
var_dump(7e-3); // Floating Point dengan E notation Minu (7 x 0.001) : float(0.007)

echo "Underscore di Floating Point : ";
var_dump(1_234.567); // Underscore di Floating Point : float(1234.567)