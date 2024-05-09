<?php

/**
 * Tipe Data String
 * ● Tipe data string adalah tipe data representasi dari teks
 * ● String bisa mengandung kosong atau banyak karakter
 */

// single quote
echo 'Nama : '; // Nama :
echo 'Budhi Octaviansyah'; // Budhi Octaviansyah
echo "\n"; // \n enter

// double quote
echo "Nama : "; // // Nama :
echo "Budhi\t Octaviansyah\t\n\n"; // \t tab... // Budhi     Octaviansyah

/**
 * Multiline String
 * ● Kadang kita ingin membuat data string yang lebih dari satu baris. Untuk melakukan itu sebenarnya
 * kita bisa menggunakan \n sebagai ENTER
 * ● Namun PHP memiliki fitur yang lebih baik, yaitu bernama Heredoc dan Nowdoc
 */

// heredoc
echo <<<BUDHI
ini adalah contoh string yang sangat
panjang, dan juga gak perlu ngetik ENTER secara
manual, "bisa quote" juga 
BUDHI;

echo "\n\n";

// nowdoc
echo <<<'BUDHI'
ini adalah contoh string yang sangat
panjang, dan juga gak perlu ngetik ENTER secara
manual, "bisa quote" juga
BUDHI;
