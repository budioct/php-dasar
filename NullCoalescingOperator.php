<?php

/**
 * Null Coalescing Operator
 * ● Sebelumnya kita tahu bahwa data kosong direpresentasikan dengan data NULL di PHP
 * ● Dan hal yang paling repot di PHP adalah mengecek apakah sebuah data ada atau tidak, dan juga
 *   apakah data tersebut isinya null atau bukan
 * ● Biasanya untuk melakukan itu, kita perlu menggunakan pengecekan if statement dengan function isset($variable)
 * ● Namun untungnya di php ada null coalescing operator menggunakan tanda ??
 */

// pengecekan dengan isset(var)
// isset(variable) check apakah sebuah variable ada dan valuenya tidak NULL
$dataOld = [];

if (isset($dataOld["action"])){
    $action = $dataOld["action"];
} else {
    $action = "Nothing";
}
echo $action . PHP_EOL; // Nothing

// Null Coalescing Operator
// Null Coalescing Operator penganti pengecekan isset(var) yang lebih simple
$data = [
    "action" => "Create"
];

$action = $data["action"] ?? "Nothing"; // ?? (kalau tidak ada dan valuenya = NULL ganti dengan "Nothing")

echo $action . PHP_EOL; // Create