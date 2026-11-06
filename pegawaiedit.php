<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="judul"><h1>Edit Pegawai</h1></div>
    <br>

    <a href="pegawai.php">Lihat Semua Data</a>

    <br/>

    <?php
    include "koneksi.php";
    $nip = $_GET['nip'];
    $query_mysql = mysqli_query($koneksi, "SELECT * FROM pegawai WHERE nip='$nip'");
    $nomor = 1;
    while ($data = mysqli_fetch_array($query_mysql)) {
    ?>
    <form action="pegawaieditaksi.php" method="post">
        <table>
            <tr>
                <td>Nama Pegawai</td>
                <td>
                    <input type="hidden" name="nip" value="<?php echo $data['nip']; ?>">
                    <input type="text" name="nama" value="<?php echo $data['nama']; ?>">
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" value="<?php echo $data['alamat']; ?>"></td>
            </tr>
            <tr>
                <td>No. Telepon</td>
                <td><input type="text" name="no_telepon" value="<?php echo $data['no_telepon']; ?>"></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" value="<?php echo $data['username']; ?>"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" value="<?php echo $data['password']; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Simpan">
                </td>
            </tr>
        </table>
    </form>
    <?php
    }
    ?>
</body>
</html>