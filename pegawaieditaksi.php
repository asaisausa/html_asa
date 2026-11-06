<?php
include 'koneksi.php';
$nip = $_POST['nip'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_telepon = $_POST['no_telepon'];
$username = $_POST['username'];
$password = $_POST['password'];

mysqli_query($koneksi, "UPDATE pegawai SET nama='$nama', alamat='$alamat', no_telepon='$no_telepon', username='$username', password='$password' WHERE nip='$nip'");
header("location:pegawai.php?pesan=update");
?>