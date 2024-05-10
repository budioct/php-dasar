<?php

/**
 * Tipe Data Array
 * ● Array adalah tipe data yang berisikan kosong atau kumpulan data
 * ● Array di PHP bisa berisikan data dengan jenis berbeda-beda
 * ● Array di PHP memiliki panjang dinamis, artinya kita bisa menambah data ke Array
 *   sebanyak-banyaknya, tidak dibatasi kapasitasnya
 */

$arrays = array(1, 2, 3, 4, 5);
var_dump($arrays);
/**
 * result var_dump
 * array(5) {
 * [0]=>
 * int(1)
 * [1]=>
 * int(2)
 * [2]=>
 * int(3)
 * [3]=>
 * int(4)
 * [4]=>
 * int(5)
 * }
 */

$names = ["budhi", "oct", "22"];
var_dump($names);
/**
 * result var_dump
 * array(3) {
 * [0]=>
 * string(5) "budhi"
 * [1]=>
 * string(3) "oct"
 * [2]=>
 * string(2) "22"
 * }
 */


/**
 * Operasi Array
 * Operasi                        Keterangan
 * $array[index]                  Mengakses data di array pada nomor index
 * $array[index] = value          Mengubah data di array pada nomor index dengan value baru
 * $array[] = value               Menambah data di array pada posisi paling belakang
 * unset($array[index])           Menghapus data di array, index otomatis hilang dari array
 * count($array)                  Mengambil total data di array
 */

var_dump($names[0]); // string(5) "budhi" // akases array pada nomor index

$names[0] = "Mamat"; // merubah data array pada nomor index
var_dump($names);

unset($names[1]); // menghapus index array pada nomor index
var_dump($names);

$names[] = "add data belakang"; // add data array paling belakang/baru
var_dump($names);

var_dump(count($names)); // count(array): int // get panjang array


/**
 * Array Sebagai Map
 * ● Biasanya di kebanyakan bahasa pemrograman, terdapat tipe data bernama Map, yaitu asosiasi
 *    antara key dan value
 * ● Namun di PHP, Map bisa dibuat menggunakan Array
 * ● Secara default Array akan menggunakan index (number) sebagai key dan value nya kita bisa bebas
 *    memasukkan data ke dalam Array
 * ● Namun jika kita ingin, kita juga bisa mengubah index nya tidak harus menggunakan number, bisa
 *    gunakan tipe data lain, seperti string misal nya
 * ● Hal tersebut terlihat seperti Map di bahasa pemrograman lain
 */

$budhi = array(
    "id" => "1",
    "name" => "budhi",
    "age" => "28"
);

$mamat = [
    "id" => "2",
    "name" => "mamat",
    "age" => "28"
];

var_dump($budhi);
var_dump($mamat);

/**
 * result var_dump
 * array(3) {
 * ["id"]=>
 * string(1) "1"
 * ["name"]=>
 * string(5) "budhi"
 * ["age"]=>
 * string(2) "28"
 * }
 * array(3) {
 * ["id"]=>
 * string(1) "2"
 * ["name"]=>
 * string(5) "mamat"
 * ["age"]=>
 * string(2) "28"
 * }
 */

/**
 * Array di dalam Array
 * ● Seperti dijelaskan di awal, Array di PHP bisa berisikan data apapun
 * ● Sehingga kita juga bisa membuat array di dalam array jika memang dibutuhkan
 */

$budhi = array(
    "id" => "1",
    "name" => "budhi",
    "age" => "28",
    "address" => [
        "city" => "Tangerang",
        "country" => "Indonesia",
    ]
);

var_dump($budhi);
/**
 * result var_dump
 *array(4) {
 * ["id"]=>
 * string(1) "1"
 * ["name"]=>
 * string(5) "budhi"
 * ["age"]=>
 * string(2) "28"
 * ["address"]=>
 * array(2) {
 * ["city"]=>
 * string(9) "Tangerang"
 * ["country"]=>
 * string(9) "Indonesia"
 * }
 * }
 */

