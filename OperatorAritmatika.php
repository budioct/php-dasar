<?php

/**
 * Operator Aritmatika (1)
 * Operator                     Keterangan
 * +$variable                   Positif
 * -$variable                   Negatif
 * $variable + $variable        Penambahan
 * $variable - $variable        Pengurangan
 * $variable * $variable        Perkalian
 * $variable / $variable        Pembagian
 *
 * Operator Aritmatika (2)
 * Operator                     Keterangan
 * $variable % $variable        Sisa bagi
 * $variable ** $variable       Pangkat
 */

$a = 10;
$b = 5;
$c = 9;
$d = 3;

echo "positif dari: $a = " . +$a . "\n"; // positif dari: 10 = 10
echo "negatif dari: $a = " . -$a . "\n"; // negatif dari: 10 = -10

echo "$a + $b = " . $a + $b . "\n"; // 10 + 5 = 15
echo "$a - $b = " . $a - $b . "\n"; // 10 - 5 = 5
echo "$a * $b = " . $a * $b . "\n"; // 10 * 5 = 5
echo "$a / $b = " . $a / $b . "\n"; // 10 / 5 = 2

echo "$a % $c = " . $a % $c . "\n"; // 10 % 9 = 1 // sisa pembagian
echo "$a ** $d = " . $a ** $d . "\n"; // 10 ** 3 = 1000 // 10 * 10 * 10 = 1000

