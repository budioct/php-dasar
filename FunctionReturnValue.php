<?php

/**
 * Function Return Value
 * ● Secara default, function itu tidak menghasilkan value apapun, namun jika kita ingin, kita bisa
 *    membuat sebuah function mengembalikan nilai
 * ● Dan di dalam block function, untuk menghasilkan nilai tersebut, kita harus menggunakan kata
 *    kunci return, lalu diikuti dengan data yang ingin dihasilkan
 * ● Kita hanya bisa menghasilkan 1 data di sebuah function, tidak bisa lebih dari satu
 *
 * function namaFunction(argumentFunction): returnTypeData {
 *     // block body
 *     // return body
 * }
 *
 */

// function return value 1
function sum(int $first, int $second): int
{
    $total = $first + $second;
    return $total;
}

$result = sum(10, 10);
var_dump($result); // int(20)

$result = sum(100, 100);
var_dump($result); // int(200


// function return value 2
function getFinalValue(int $value): string
{
    if ($value >= 80) {
        return "A";
    } else if ($value >= 70) {
        return "B";
    } else if ($value >= 60) {
        return "C";
    } else if ($value >= 50) {
        return "D";
    } else {
        return "E";
    }
    echo "Ups" . PHP_EOL;
}

$score = getFinalValue(90);
var_dump($score); // string(1) "A"

$score = getFinalValue(30);
var_dump($score); // string(1) "E"
