<?php

/**
 * Variable
 * ● Variable adalah tempat untuk menyimpan data sehingga bisa kita gunakan lagi di kode program
 *    selanjutnya
 * ● Di PHP variable bisa menampung berbagai jenis tipe data dan bisa berubah-ubah tipe data
 * ● Untuk membuat variable kita bisa menggunakan tanda $ (dolar) diikuti dengan nama variable nya
 * ● Penamaan variable tidak boleh mengandung spasi
 */

$name = "Budhi";
$city = "Tangerang";
$number = 6;

echo "Nama : " . $name . "\n"; // Nama : Budhi
echo "City : " . $city . "\n"; // City : Tangerang
echo "Number : " . $number . "\n"; // Number : 6

/**
 * Variable Variables
 * ● PHP memiliki kemampuan variable variables, yaitu membuat variable dari string value variable
 * ● Walaupun fitur ini ada, tapi fitur ini sangat membingungkan jika digunakan secara luas, jadi
 *   disarankan untuk tidak menggunakan fitur ini kecuali memang diperlukan
 * ● Untuk membuat variable dari value variable kita bisa menggunakan $$ diikuti dengan nama
 *   variable nya
 *
 * note: tidak disarankan implement ini
 */

$contoh = "budhi";
$$contoh = "oct";

echo "Contoh : " . $contoh . "\n"; // Contoh : budhi
echo "budhi : " . $budhi . "\n"; // eko : oct