<?php

/**
 * Constant
 * ● Variable di PHP sifatnya mutable, artinya bisa dirubah
 * ● Jika kita ingin membuat variable yang immutable (tidak bisa dirubah), maka tidak bisa kita lakukan
 *   di PHP
 * ● Sebagai gantinya, terdapat fitur yang namanya constant
 * ● Constant adalah tempat untuk menyimpan data yang tidak bisa dirubah lagi setelah di deklarasikan
 * ● Untuk membuat constant kita bisa menggunakan function define()
 * ● Best practice pembuatan nama constant adalah menggunakan UPPER_CASE
 */

define("FOO", "BAR"); // define(constant_variable, constant_value, case_insensitive:boolean)
define("AUTHOR", "ANAK OM MAMAT");
define("APP_VERSION", "1.0.0");

echo FOO . "\n"; // BAR
echo AUTHOR . "\n"; // ANAK OM MAMAT
echo APP_VERSION . "\n"; // 1.0.0
