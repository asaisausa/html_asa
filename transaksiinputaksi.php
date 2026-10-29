<?php
include 'koneksi.php';

$id_transaksi = $_POST['id_transaksi'];
$id_barang = $_POST['id_barang'];
$harga = $_POST['harga'];
$qty = $_POST['qty'];
$harga_total = $_POST['harga_total'];
$nip = $_POST['nip'];

mysqli_query($koneksi, "INSERT INTO transaksi VALUES ('$id_transaksi', '$id_barang', '$harga', '$qty', '$harga_total', '$nip')");

header("location:transaksi.php?pesan=input");
?>