<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="judul"><h1>Edit Barang</h1></div>
    <br>

    <a href="barang.php">Lihat Semua Data</a>

    <br/>

    <?php
    include "koneksi.php";
    $id = $_GET['id'];
    $query_mysql = mysqli_query($koneksi, "SELECT * FROM barang WHERE id_barang='$id'");
    $nomor = 1;
    while ($data = mysqli_fetch_array($query_mysql)) {
    ?>
    <form action="barangeditaksi.php" method="post">
        <table>
            <tr>
                <td>Nama Barang</td>
                <td>
                    <input type="hidden" name="id_barang" value="<?php echo $data['id_barang']; ?>">
                    <input type="text" name="nama_barang" value="<?php echo $data['nama_barang']; ?>">
                </td>
            </tr>
            <tr>
                <td>Harga Barang</td>
                <td><input type="text" name="harga" value="<?php echo $data['harga']; ?>"></td>
            </tr>
            <tr>
                <td>Stok Barang</td>
                <td><input type="text" name="stok" value="<?php echo $data['stok']; ?>"></td>
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