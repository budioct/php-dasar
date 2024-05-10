<?php

/**
 * Recursive Function
 * ● Recursive function adalah kemampuan function memanggil function dirinya sendiri
 * ● Kadang memang ada banyak problem, yang lebih mudah diselesaikan menggunakan recursive
 *   function, seperti contohnya kasus factorial
 */

// factorial function sederhana
function factorialLoop(int $value): int
{
    $total = 1;

    for ($i = 1; $i <= $value; $i++) {
        $total *= $i;
    }

    return $total;
}

var_dump(factorialLoop(5)); // int(120)
var_dump(1 * 2 * 3 * 4 * 5); // int(120)


// dengan recursive factorial function
function factorialRecursive(int $value): int
{
    if ($value == 1) {
        return 1;
    } else {
        return $value * factorialRecursive($value - 1); // recursive (memangil dirinya sendiri)
    }
}

var_dump(factorialRecursive(5)); // int(120)


function loop(int $value)
{
    if ($value == 0) {
        echo "End loop" . PHP_EOL;
    } else {
        echo "Loop-$value" . PHP_EOL;
        loop($value - 1); // recursive (memangil dirinya sendiri)
    }
}

loop(10000); // Loop-10000 ~ Loop-0 // End loop