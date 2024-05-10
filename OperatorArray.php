<?php

/**
 * Operator Array
 * ● Di PHP, Array memiliki operator khusus
 * ● Mungkin terlihat mirip dengan operator-operator sebelumnya, tapi cara kerjanya sedikit berbeda
 *
 * Contoh           Nama            Keterangan
 * $a + $b          Union           Menggabungkan array $a dan $b
 * $a == $b         Equality        true jika $a dan $b memiliki key-value sama
 * $a === $b        Identity        true jika $a dan $b memiliki key-value sama dan posisi sama
 * $a != $b         Inequality      true jika $a dan $b tidak sama
 * $a <> $b         Inequality      true jika $a dan $b tidak sama
 * $a !== $b        Nonidentity     true jika $a dan $b tidak identik
 */

$first = [
    "first_name" => "Ahmad",
];

$last = array(
    "last_name" => "Diallo",
);

// operator array
var_dump($first + $last); // Union
/**
 * result Union
 * array(2) {
 * ["first_name"]=>
 * string(5) "Ahmad"
 * ["last_name"]=>
 * string(6) "Diallo"
 * }
 */


$a = [
    "first_name" => "Ahmad",
    "last_name" => "Diallo",
];

$b = array(
    "first_name" => "Ahmad",
    "last_name" => "Diallo",
);

var_dump($a == $b); // true // Equality
var_dump($a === $b); // true // Identity
var_dump($a !== $b); // false // Inequality
var_dump($a != $b); // false // Inequality
var_dump($a <> $b); // false // Nonidentity