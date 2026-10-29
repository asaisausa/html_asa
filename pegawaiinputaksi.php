<?php
include 'koneksi.php';

$nip = $_POST['nip'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$username = $_POST['username'];
$password = $_POST['password'];

mysqli_query($koneksi, "INSERT INTO pegawai VALUES ('$nip', '$nama', '$alamat', '$username', '$password')");

header("location:pegawai.php?pesan=input");
?>