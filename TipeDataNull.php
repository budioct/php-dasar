<?php

/**
 * Data NULL
 * ● Nilai NULL merepresentasikan sebuah variable tanpa nilai.
 * ● Saat kita membuat variable, lalu ingin menghapus data yang terdapat di variable tersebut, kita bisa
 *   menggunakan NULL untuk mengosongkan variable tersebut
 * ● Untuk membuat data NULL, kita bisa menggunakan kata kunci NULL (case insensitive)
 */

$name = "Budhi";
$name = NULL;

$food = null;

echo "name : " . $name . "\n"; // name :  // variable kosong
var_dump($name); // NULL

/**
 * Mengecek Apakah Data NULL
 * ● Kadang kita ingin tahu apakah sebuah data bernilai null atau tidak
 * ● Untuk mengecek apakah sebuah data bernilai null, kita bisa menggunakan function
 *   is_null($variable)
 */

$is_null = is_null($name); // is_null(variable): boolean // check apakah variable itu null
var_dump($is_null); // bool(true)

/**
 * Menghapus Variable
 * ● Selain mengubah menjadi NULL, di PHP juga kita bisa menghapus sebuah variable, caranya dengan
 *   menggunakan function unset($variable)
 * ● Namun hati-hati, ketika kita hapus variable, kita tidak bisa lagi mengakses variable tersebut,
 *   bahkan function is_null($variable) pun akan menjadi error jika mengakses variable tersebut.
 * ● Agar lebih aman, kita bisa menggunakan function isset($variable) untuk mengeccek apakah sebuah
 *   variable ada dan nilainya tidak NULL
 */

// unset(variable) menghapus variable dan value nya
// isset(variable) check apakah sebuah variable ada dan valuenya tidak NULL

$data = "mancing mania";
echo "data : " . $data . "\n"; // data : mancing mania
unset($data); // HAPUS variable
var_dump(isset($data)); // bool(false)

$field = "jossss";
echo "data : " . $field . "\n"; // data : jossss
var_dump(isset($field)); // bool(true)