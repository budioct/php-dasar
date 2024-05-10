<?php

/**
 * is Function
 * ● PHP memiliki banyak sekali function dengan prefix is_
 * ● Function-function ini rata-rata digunakan untuk mengecek tipe data dari sebuah data
 * ● https://www.php.net/manual/en/ref.var.php
 *
 * Function             Keterangan
 * is_string()          Apakah tipe data string
 * is_bool()            Apakah tipe data boolean
 * is_int()             Apakah tipe data number integer
 * is_float()           Apakah tipe data number floating point
 * is_array()           Apakah tipe data array
 * is_callable()        Apakah tipe data callable
 */

$data = "Budhi";

var_dump(is_string($data)); // bool(true)
var_dump(is_bool($data)); // bool(false)
var_dump(is_int($data)); // bool(false)
var_dump(is_float($data));// bool(false)
var_dump(is_array($data));// bool(false)
var_dump(is_null($data));// bool(false)
