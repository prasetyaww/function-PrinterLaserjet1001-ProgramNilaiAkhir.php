<?php

echo "<h1>====Program Menghitung Nilai Akhir====</h1>";
echo "Nama Lengkap : Prasetya Ningrum <br /> kelas : X RPL 1 <br /> ";

$nilaiHarian = 95*30/100;
$nilaiUts = 80*30/100;
$nilaiUas = 85*40/100;
$nilaiAkhir = $nilaiHarian + $nilaiUts + $nilaiUas;

echo "Nilai harian : $nilaiHarian <br />";
echo "Nilai UTS : $nilaiUts <br />";
echo "Nilai UAS : $nilaiUas <br />";
echo "Nilai Akhir : $nilaiAkhir <br />";

if($nilaiAkhir >=90 && $nilaiAkhir <=100){
    echo "Predikat Nilai : A+";
} else if ($nilaiAkhir >=85 && $nilaiAkhir <=89){
    echo "Predikat Nilai : A";
} else if($nilaiAkhir >=80 && $nilaiAkhir <=84){
    echo "predikat nilai : B+";
} else if($nilaiAkhir >=76 && $nilaiAkhir <=79){
    echo "predikat nilai : B";
} else if($nilaiAkhir >= 60 && $nilaiAkhir <=75){
    echo "predikat nilai : C";
} else if($nilaiAkhir >= 40 && $nilaiAkhir <=59){
    echo "predikat nilai : D";
} else if($nilaiAkhir >= 0 && $nilaiAkhir <=39){
    echo "predikat nilai : E";
} else {
    echo "anda tidak mendapatkan predikat";
} 

?>