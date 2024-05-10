<?php

/**
 * String Function
 * ● Sebelumnya saya pernah menggunakan beberapa function bawaan dari PHP untuk memanipulasi
 *    data string.
 * ● Sebenarnya banyak sekali function bawaan PHP yang bisa kita gunakan untuk memanipulasi string
 * ● https://www.php.net/manual/en/ref.strings.php
 *
 * Function                     Keterangan
 * join() / implode()           Menggabungkan array menjadi string
 * explode()                    Memecah string menjadi array
 * strtolower()                 Mengubah string menjadi lowercase
 * strtoupper()                 Mengubah string menjadi uppercase
 * substr()                     Mengambil sebagian string
 * trim()                       Menghapus whitespace di depan dan belakang string
 *
 */

var_dump(join(",", [10, 11, 12, 13, 14, 15]));
var_dump(explode(" ", "Budhi Octaviansyah 22"));
var_dump(strtolower("BUDHI OCTAVIANSYAH 22"));
var_dump(strtoupper("budhi octaviansyah 22"));
var_dump(trim("        budhi      octaviansyah       "));
var_dump(substr("Budhi Octaviansyah 22", 0, 3));

/**
 * result
 * string(17) "10,11,12,13,14,15"
 * array(3) {
 * [0]=>
 * string(5) "Budhi"
 * [1]=>
 * string(12) "Octaviansyah"
 * [2]=>
 * string(2) "22"
 * }
 * string(21) "budhi octaviansyah 22"
 * string(21) "BUDHI OCTAVIANSYAH 22"
 * string(23) "budhi      octaviansyah"
 * string(3) "Bud"
 */