<?php

/**
 * Sintak Perulangan While
 * init statement
 * while(kodnsi){
 *     // block perulangan
 *     post statement
 * }
 */

$counter = 1;

while ($counter <= 10){
    echo "Ini adalah while loop ke-$counter" . PHP_EOL;
    $counter++;
}

// Syntax Alternative While Loop
while ($counter <=5) :
    echo "Ini adalah while loop ke-$counter" . PHP_EOL;
    $counter++;
endwhile;