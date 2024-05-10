<?php

/**
 * Array Function
 * ● Di PHP juga terdapat banyak sekali function bawaan yang bisa kita gunakan untuk memanipulasi
 *    data Array
 * ● https://www.php.net/manual/en/ref.array.php
 *
 * Function                  Keterangan
 * array_keys()              Mengambil semua keys milik array
 * array_values()            Mengambil semua values milik array
 * array_map()               Mengubah semua data array dengan callback
 * sort()                    Mengurutkan array
 * rsort()                   Mengurutkan array terbalik
 * shuffle()                 Mengubah posisi data di array secara random
 */

$data = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$dataResult = array_map(fn(int $value) => $value * 10, $data);
var_dump($dataResult);

rsort($data);
var_dump($data);

var_dump(array_keys($data));
var_dump(array_values($data));

$person = [
    "first_name" => "Eko",
    "last_name" => "Khannedy"
];
var_dump(array_keys($person));
var_dump(array_values($person));

/**
 * result
 * // array_map()
 * array(10) {
 * [0]=>
 * int(10)
 * [1]=>
 * int(20)
 * [2]=>
 * int(30)
 * [3]=>
 * int(40)
 * [4]=>
 * int(50)
 * [5]=>
 * int(60)
 * [6]=>
 * int(70)
 * [7]=>
 * int(80)
 * [8]=>
 * int(90)
 * [9]=>
 * int(100)
 * }
 *
 * // rsort()
 * array(10) {
 * [0]=>
 * int(10)
 * [1]=>
 * int(9)
 * [2]=>
 * int(8)
 * [3]=>
 * int(7)
 * [4]=>
 * int(6)
 * [5]=>
 * int(5)
 * [6]=>
 * int(4)
 * [7]=>
 * int(3)
 * [8]=>
 * int(2)
 * [9]=>
 * int(1)
 * }
 *
 * // array_keys()
 * array(10) {
 * [0]=>
 * int(0)
 * [1]=>
 * int(1)
 * [2]=>
 * int(2)
 * [3]=>
 * int(3)
 * [4]=>
 * int(4)
 * [5]=>
 * int(5)
 * [6]=>
 * int(6)
 * [7]=>
 * int(7)
 * [8]=>
 * int(8)
 * [9]=>
 * int(9)
 * }
 *
 * // array_values()
 * array(10) {
 * [0]=>
 * int(10)
 * [1]=>
 * int(9)
 * [2]=>
 * int(8)
 * [3]=>
 * int(7)
 * [4]=>
 * int(6)
 * [5]=>
 * int(5)
 * [6]=>
 * int(4)
 * [7]=>
 * int(3)
 * [8]=>
 * int(2)
 * [9]=>
 * int(1)
 * }
 *
 * // array_keys()
 * array(2) {
 * [0]=>
 * string(10) "first_name"
 * [1]=>
 * string(9) "last_name"
 * }
 *
 * array_values()
 * array(2) {
 * [0]=>
 * string(3) "Eko"
 * [1]=>
 * string(8) "Khannedy"
 * }
 */