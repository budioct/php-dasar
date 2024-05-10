<?php

/**
 * Break & Continue
 * ● Pada switch statement, kita sudah mengenal kata kunci break, yaitu untuk menghentikan case
 *    dalam switch
 * ● Sama dengan pada perulangan, break juga digunakan untuk menghentikan seluruh perulangan.
 * ● Namun berbeda dengan continue, continue digunakan untuk menghentikan perulangan saat ini,
 *    lalu melanjutkan ke perulangan selanjutnya
 */

// break
$counter = 1;

while (true) {
    echo "Ini adalah for while ke-$counter" . PHP_EOL;
    $counter++;

    if ($counter > 10) {
        break; // break akan memaksa berhenti proses
    }
}

// continue
for ($counter = 1; $counter <= 100; $counter++) {
    if($counter % 2 == 0){
        continue; // continue akan melewati proses
    }
    echo "Counter : $counter" . PHP_EOL;
}