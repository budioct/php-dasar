<?php

/**
 * Ternary Operator
 * ● Kadang ada kasus kita butuh melakukan pengecekan kondisi menggunakan if statement, lalu jika
 *    benar kita ingin memberi nilai terhadap variable dengan nilai X dan jika salah dengan nilai Y
 * ● Penggunaan if statement pada kasus seperti bisa dipersingkat menggunakan ternary operator
 * ● Ternary operator menggunakan kata kunci ? dan :
 */

$gender = "PRIA";

$result = $gender == "PRIA" ? "Dia Pria" : "Dia Bukan Pria";
echo $result;