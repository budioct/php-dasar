<?php

/**
 * goto Operator
 * ● Salah satu fitur yang sebenarnya jarang sekali digunakan di PHP adalah goto operator
 * ● Kenapa jarang digunakan karena jika terlalu banyak menggunakan goto operator, kode program
 *    aplikasinya akan mudah membingungkan yang membaca kode nya
 * ● goto adalah fitur dimana kita bisa loncat ke kode program sesuai dengan keinginan kita
 * ● Agar goto bisa loncat ke kode program, kita harus membuat label di php dengan menggunakan
 *    nama label lalu diakhiri : (colon)
 *
 * NOTE: tidak di rekomendasikan di implement, karna akan membingungkan code program
 */

goto a;
echo "Hello World" . PHP_EOL; // akan di skip

a:
echo "Hello A" . PHP_EOL;

$counter = 1;

while (true) {
    echo "Ini adalah for while ke-$counter" . PHP_EOL;
    $counter++;

    if ($counter > 10) {
        goto end;
    }
}

end:
echo "End Loop";