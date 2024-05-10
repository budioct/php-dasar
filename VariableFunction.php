<?php

/**
 * Variable Function
 * ● PHP mendukung konsep yang bernama variable function
 * ● Variable function adalah kemampuan memanggil sebuah function dari value yang terdapat di
 *    sebuah variable
 * ● Untuk menggunakan variable function, kita bisa secara langsung memanggil $namaVariable(), jika
 *    ingin menambahkan argument, kita bisa menggunakan $namaVariable(argument)
 */

// Variable Function
function foo()
{
    echo "Foo" . PHP_EOL;
}

function bar()
{
    echo "Bar" . PHP_EOL;
}

// mengakses variable function
$functionYangAkanDipanggil = "foo"; // $variable = "NamaFunction";
$functionYangAkanDipanggil(); // akses variable function yang sudah di assaigment

$functionYangAkanDipanggil = "bar";
$functionYangAkanDipanggil();

// penggunaan variable function
function sayHello(string $name, $filter)
{
    $finalName = $filter($name); // $filter($name) // callback
    echo "Hello $finalName" . PHP_EOL;
}

function sampleFunction(string $name): string {
    return "Sample $name";
}

sayHello("Budhi", "sampleFunction"); // Hello Sample Budhi
sayHello("Budhi", "strtoupper"); // Hello BUDHI
sayHello("Budhi", "strtolower"); // Hello budhi