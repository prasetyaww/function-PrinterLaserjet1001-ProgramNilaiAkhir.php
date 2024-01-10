<?php

$namaBarang = "Printer Laserjet 1001";
$kode = "P001";
$kategori = "Elektronik";
$hargaBarang = 150000;
$jumlahBarang = 3;

$totalHarga = $hargaBarang * $jumlahBarang;

if( $totalHarga >100000){
    $totalHarga = $hargaBarang * $jumlahBarang - 50000;
}else{
    $totalHarga = $hargaBarang * $jumlahBarang;
}

echo "<h1>===== Program Menghitung Pembelian Produk =====</h1>";
echo "Nama Barang : $namaBarang <br /> Kode Barang : $kode <br /> Kategori : $kategori <br /> Harga Barang : Rp. $hargaBarang <br /> Jumlah Barang : $jumlahBarang <br /> Total Harga : Rp. $totalHarga <br /> status : <span style = 'color : green'> Sudah Bayar </span>";

?>