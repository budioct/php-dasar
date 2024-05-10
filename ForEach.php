<?php

/**
 * For Each
 * ● Kadang kita biasa mengakses data array menggunakann perulangan
 * ● Mengakses data array menggunakan perulangan sangat bertele-tele, kita harus membuat counter,
 *    lalu mengakses array menggunakan counter yang kita buat
 * ● Namun untungnya, di PHP terdapat perulangan for each, yang bisa digunakan untuk mengakses
 *    seluruh data di Array secara otomatis
 */

$names = ["budhi", "oct", "22"];

// mengakses array dengan for loop
for ($i = 0; $i < count($names); $i++) {
    echo "Data ke $i = $names[$i], (akses dengan for-loop)" . PHP_EOL;
}

// mengakses array dengan foreach
foreach ($names as $name) {
    echo "Data $name, (akses dengan foreach umum)" . PHP_EOL;
}

// mengakses array dengan foreach, get index dan value
foreach ($names as $index => $name) {
    echo "Data ke $index = $name, (akses dengan foreach get index, value)" . PHP_EOL;
}


$person = [
    "first_name" => "budhi",
    "middle_name" => "octaviansyah",
    "last_name" => "22"
];

// mengakses Map dengan foreach, get key dan value
foreach ($person as $key => $value) {
    echo "$key : $value, (akses dengan foreach get key, value)" . PHP_EOL;
}