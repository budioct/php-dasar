<?php

/**
 * Dot Operator
 * ● Dot (titik) operator adalah operator yang bisa kita gunakan untuk menambahkan string dengan
 *   data lain (bisa string atau tipe data lainnya)
 * ● Sebenarnya kita bisa menggunakan + (plus) untuk menambahkan string, namun jika kita coba
 *   tambahkan string dengan tipe data number, maka akan terjadi error. Oleh karena itu
 *   direkomendasikan menggunakan . (dot) untuk menambahkan string dengan data lain
 */


$name = "budhi octaviansyah";

echo "Nama : " . $name . PHP_EOL; // Nama : budhi octaviansyah
echo "Value : " . 100 . PHP_EOL; // Value : 100


/**
 * Konversi ke Number dan Sebaliknya
 * ● Kadang kita sering melakukan konversi tipe data dari string ke number (int / float) atau sebaliknya
 * ● Di PHP untuk melakukan konversi cukup mudah, kita hanya perlu menggunakan tanda kurung (tipe data)
 * ● Tipe data untuk string adalah string, untuk number bisa menggunakan int untuk integer dan float
 *   untuk floating point
 */

$valueString = (string) 100;
var_dump($valueString); // "100"

$valueInt = (int) "100";
var_dump($valueInt); // 100

$valueFloat = (float) "100.11";
var_dump($valueFloat); // 100.11

// jika konversi salah maka akan di set value 0 oleh php
$valueInt1 = (int) "salah";
var_dump($valueInt1); // 0

$valueFloat1 = (float) "salah";
var_dump($valueFloat1); // 0


/**
 * Mengakses Karakter
 * ● String di PHP seperti array karakter, dimana kita bisa mengakses data tiap karakternya
 *   menggunakan kurung siku
 * ● Sama seperti di array, index pertama dimulai dari 0
 * ● Jika kita mengakses index melebihi karakter di string, maka akan terjadi error
 */

$budhi = "budhi";
echo $budhi[0] . PHP_EOL; // b
echo $budhi[1] . PHP_EOL; // u
echo $budhi[2] . PHP_EOL; // d
echo $budhi[3] . PHP_EOL; // h
echo $budhi[4] . PHP_EOL; // i


/**
 * Variable Parsing
 * ● Khusus string menggunakan double quote atau heredoc, kita bisa menggunakan karakter $ untuk
 *    mengakses variable.
 * ● Ini memudahkan ketika kita ingin menggabungkan string dengan variable.
 * ● Cara penggunaanya adalah dengan menggunakan karakter $ lalu diikuti dengan nama variable nya
 */

$asep = "asep";
echo "Hello $asep, Selamat Belajar" . PHP_EOL; // Hello asep, Selamat Belajar


/**
 * Curly Brace
 * ● Kadang kita butuh menggabungkan variable dengan string tanpa ada spasi. Hal ini akan
 *    menyulitkan jika hanya menggunakan variable parsing
 * ● Untungnya di PHP kita bisa menambahkan kurung kurawal sebelum menggunakan variable parsing
 */

$var = "1000";
echo "This is {$var}%" . PHP_EOL; // This is 1000