<?php

/**
 * Operator Penugasan
 * ● Operator penugasan di PHP sama seperti bahasa pemrograman lain, yaitu dengan menggunakan
 *   karakter = (sama dengan)
 * ● Operator penugasan sudah sering kita gunakan, terutama ketika mengubah value sebuah variable
 * ● Namun selain hal itu, operasi penugasan juga bisa digunakan untuk operasi aritmatika
 *
 * Operator Penugasan Aritmatika
 * Penugasan        Keterangan
 * $a += $b         $a = $a + b
 * $a -= $b         $a = $a - b
 * $a *= $b         $a = $a * b
 * $a /= $b         $a = $a / b
 * $a %= $b         $a = $a % b
 */

$total = 0;

$fruits = 10000;
$chicken = 8000;
$orangeJuice = 10000;

// contoh operator penugasan biasa
$total = $total + $fruits;
$total = $total + $chicken;
$total = $total + $orangeJuice;

// contoh operator penugasan aritmatik
$total += $fruits;
$total += $chicken;
$total += $orangeJuice;

echo $total . PHP_EOL; // 28000
var_dump($total); // int(28000)
