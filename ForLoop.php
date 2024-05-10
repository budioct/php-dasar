<?php

/**
 * Sintak Perulangan For
 * for(init statement; kondisi; post statement){
 * // block perulangan
 * }
 */

for ($counter = 1; $counter <= 10; $counter++) {
    echo "Ini adalah for loop ke-$counter" . PHP_EOL;
}

for ($counter = 10; $counter >= 1; $counter--) {
    echo "Ini adalah for loop ke-$counter" . PHP_EOL;
}

// Syntax Alternative For Loop
for ($counter = 1; $counter <= 10; $counter++):
    echo "Ini adalah for loop ke-$counter" . PHP_EOL;
endfor;

for ($counter = 10; $counter >= 1; $counter--):
    echo "Ini adalah for loop ke-$counter" . PHP_EOL;
endfor;