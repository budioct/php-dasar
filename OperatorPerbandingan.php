<?php

/**
 * Operator Perbandingan
 * ● Operator perbandingan, seperti namanya, digunakan untuk membandingan dua buat value
 * ● Hasil dari operator perbandingan adalah boolean, true jika perbandingannya benar, false jika
 *   perbandingannya salah
 *
 * Operator         Nama                    Keterangan
 * $a == $b         Sama dengan             true jika $a sama dengan $b setelah dilakukan konversi tipe data
 * $a === $b        Identik                 true jika $a sama dengan $b dan memiliki tipe data yang sama
 * $a !== $b        Tidak identik           true jika $a tidak sama dengan $b atau tidak sama tipe data
 * $a != $b         Tidak sama dengan       true jika $a tidak sama dengan $b setelah dilakukan konversi tipe data
 * $a <> $b         Tidak sama dengan       true jika $a tidak sama dengan $b setelah dilakukan konversi tipe data
 *
 * Operator         Nama                            Keterangan
 * $a < $b          Kurang dari                     true jika $a kurang dari $b
 * $a <= $b         Kurang dari atau sama dengan    true jika $a kurang dari atau sama dengan $b
 * $a > $b          Lebih dari                      true jika $a lebih dari $b
 * $a >= $b         Lebih dari sama dengan          true jika $a lebih dari atau sama dengan $b
 */

var_dump("10" == 10); // true karna value
var_dump("10" != 10); // false
var_dump("10" <> 10); // false
var_dump("10" === 10); // false karna value dan type yang berbeda
var_dump("10" !== 10); // true karna value dan type yang berbeda

var_dump("10" < 10); // false
var_dump("10" <= 10); // true
var_dump("10" > 10); // false
var_dump("10" >= 10); // true
