<?php

/**
 * Anonymous Function
 * ● Anonymous function adalah function tanpa nama, di PHP disebut juga dengan Closure
 * ● Anonymous function biasanya digunakan sebagai argument atau sebagai value di variable
 * ● Anonymous function membuat kita bisa mengirim function sebagai argument di function lainnya
 */

// Anonymous Function digunakan sebagai value di variable
$sayHello = function (string $name){

    echo "Hello $name" . PHP_EOL;
};
// akses
$sayHello("Budhi"); // Hello Budhi
$sayHello("Oct"); // Hello Oct


// Anonymous Function digunakan sebagai argument di function lainnya
function sayGoodBye(string $name, $filter)
{
    $finalName = $filter($name); // $filter($name) // callback
    echo "Good bye $finalName" . PHP_EOL;
}
// akses
sayGoodBye("Budhi oct 22", function (string $name): string {
    return strtoupper($name);
}); // Good bye BUDHI OCT 22

$filterFunction = function (string $name): string {
    return strtoupper($name);
};
sayGoodBye("Budhi octaviansyah", $filterFunction); // Good bye BUDHI OCTAVIANSYAH


/**
 * Mengakses Variable di Luar Closure
 * ● Secara default, anonymous function tidak bisa mengakses variabel yang terdapat diluar function
 * ● Jika kita ingin menggunakan variable yang terdapat diluar anonymous function, kita perlu secara
 *   explicit menyebutkannya menggunakan kata kunci "use" lalu diikuti variable-variable yang ingin kita gunakan
 */

$firstName = "budhi";
$lastName = "octaviansyah";

$sayHelloBudhi = function () use ($firstName, $lastName) {
    echo "Hello $firstName $lastName" . PHP_EOL;
};
// akses
$sayHelloBudhi(); // Hello budhi octaviansyah

$firstName = "Budi";
$lastName = "Jamal";
$sayHelloBudhi(); // Hello budhi octaviansyah