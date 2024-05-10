<?php

/**
 * Operator Logika
 * ● Operator logika adalah operator untuk membandingkan dua nilai boolean
 * ● Hasil dari operator logika adalah boolean lagi
 *
 * Operator         Nama        Hasil
 * $a && $b         And         true jika $a dan $b keduanya true
 * $a and $b        And         true jika $a dan $b keduanya true
 * $a || $b         Or          true jika $a dan $b salah satu atau keduanya true
 * $a or $b         Or          true jika $a dan $b salah satu atau keduanya true
 * ! $a             Not         true jika $a bernilai false
 * $a xor $b        Xor         true jika $a dan $b salah satu true, tapi tidak keduanya
 */

// AND &&
var_dump(true && true); // true
var_dump(false && true); // false
var_dump(true and false); // false
var_dump(false and false); // false

echo PHP_EOL;

// OR ||
var_dump(true || true); // true
var_dump(false || true); // true
var_dump(true or false); // true
var_dump(false or false); // false

echo PHP_EOL;

// XOR (salah satu bernilai true = true)
var_dump(true xor true); // false
var_dump(false xor true); // true
var_dump(true xor false); // true
var_dump(false xor false); // false

echo PHP_EOL;

// !boolean negasi nilai kebalikan
var_dump(!true); // false
var_dump(!false); // true