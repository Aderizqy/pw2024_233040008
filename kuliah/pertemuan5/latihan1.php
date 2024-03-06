<?php

//1. Membuat Array 
$hari = array("Senin", "Selasa", "Rabu");
$bulan = ["Januari", "Febuari", "Maret"];
$mahasiswa = ["Rizqy", 3.5, True];

//2. Mencetak Isi Array
//Mencetak 1 nilai pada array, menggunakan index
//index dimulai 0
echo $hari[1];
echo "<br>";
echo $bulan[2];
echo "<br>";
echo $mahasiswa[0];
echo "<hr>";

//Cetak semua isi array
//var_dump() atau print_r()
//Digunakan saat debugging
var_dump($hari);
echo "<br>";
print_r($hari);
echo "<br>";
var_dump($mahasiswa);
echo "<hr>";

//3. Memanipulasi Isi Array 
//Menambah isi Array
//di Akhir: [] atau array_push()
$hari[] = "Kamis";
$hari[] = "Jum'at";
print_r($hari);
echo "<br>";
array_push($bulan, "April", "Mei");
print_r($bulan);
echo "<br>";

//di Awal: array_unshift()
array_unshift($mahasiswa, "233040008");
print_r($mahasiswa);
echo "<hr>";

//Menghapus isi Array
//di Belakang: array_pop();
//di Depan: array_shift();
array_pop($hari);
array_shift($bulan);
print_r($hari);
echo "<br>";
print_r($bulan);