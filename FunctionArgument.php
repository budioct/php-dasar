<?php

// method yang di set default argument value ($lastName = "")
function sayHello($firstName, $lastName = "")
{
    echo "Hello $firstName $lastName" . PHP_EOL;
}

sayHello("Jamal"); // Hello Jamal
sayHello("Budhi"); // Hello Budhi
sayHello("Budhi", "Oct"); // Hello Budhi Oct

// method Type Declaration (otomatis di casting jika user salah memasukan data)
function sum(int $first, int $last)
{
    $total = $first + $last;
    echo "Total $first + $last = $total" . PHP_EOL;
}

sum(100, 100); // Total 100 + 100 = 200
sum("100", "100"); // Total 100 + 100 = 200
sum(true, false); // Total 1 + 0 = 1

// method Variable-length Argument List (bisa menerima banyak value dan otomatis akan membuat argument tersebut menjadi array)
function sumAll(...$values)
{
    $total = 0;
    foreach ($values as $value) {
        $total += $value;
    }
    echo "Total " . implode(", ", $values) . " = $total" . PHP_EOL;
}

$values = [1, 2, 3, 4, 5];

sumAll(1, 2, 3, 4, 5);
sumAll(...$values);