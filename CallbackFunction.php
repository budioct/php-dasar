<?php

/**
 * Callback Function
 * ● Callback adalah sebuah mekanisme sebuah function memanggil function lainnya sesuai dengan
 *    yang diberikan di argument
 * ● Hal ini sebenarnya sudah kita lakukan di materi Variable Function dan Anonymous Function
 * ● Namun di PHP ada cara lain untuk implementasi callback, yaitu menggunakan tipe data callable
 * ● Dan untuk memanggil callback function tersebut, kita bisa menggunakan function
 *    call_user_func(callable, arguments)
 */

// function dengan tipe data callable
function sayHello(string $name, callable $filter)
{
    $finalName = call_user_func($filter, $name); // memanggil callback function
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("Budhi", "strtoupper"); // Hello BUDHI
sayHello("OCTAVIANSYAH", "strtolower"); // Hello octaviansyah

// akses filter dengan anonymous function
sayHello("Budhi", function (string $name): string {
    return strtoupper($name); // Hello BUDHI
});

// akses filter dengan arrow function
sayHello("Budhi", fn ($name) => strtoupper($name)); // Hello BUDH