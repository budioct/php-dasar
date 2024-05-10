<?php

/**
 * Sintak Perulangan Do While
 * init statement
 * do {
 *     // block perulangan
 *     post statement
 * } while(kodnsi)
 */

$counter = 1;

do {
    echo "Ini adalah do while ke-$counter" . PHP_EOL;
    $counter++;
} while ($counter <= 10);
