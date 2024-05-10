<?php

/**
 * Increment dan Decrement
 * ● PHP mendukung gaya bahasa pemrograman C untuk menaikkan dan menurunkan data number
 *   sejumlah 1 angka
 * ● Ini bisa mempersingkat kita ketika ingin menaikkan data
 *
 * Operator Increment dan Decrement
 * Contoh       Name                    Efek
 * $a++         Post increment          Kembalikan $a lalu naikkan 1 angka
 * ++$a         Pre increment           Naikkan $a satu angka, lalu kembalikan $a
 * $a--         Post decrement          Kembalikan $a lalu turunkan 1 angka
 * --$a         Pre decrement           Turunkan $a satu angka, lalu kembalikan $a
 */

// postfix
$a = 10;
var_dump($a++); // 10

// prefix
$b = 10;
var_dump(++$b); // 11

// postfix
$c = 10;
var_dump($c--); // 10

// prefix
$d = 10;
var_dump(--$d); // 9