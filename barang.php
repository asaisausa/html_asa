<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Barang</title>
    <link rel="stylesheet" href="css/dashboard.css">
</head>

<body>
    <table width="100%" border="0">

        <!-- HEADER -->
        <tr>
            <td colspan="2" align="center" class="header">
                <h2>Dashboard</h2>
            </td>
        </tr>

        <!-- ISI -->
        <tr>

            <!-- SIDEBAR -->
            <td width="20%" class="sidebar">
                <h3>Menu</h3>

                <ul>
                    <li><a href="dashboard.html">Dashboard</a></li>
                    <!-- <li><a href="buku.html">Buku</a></li> -->
                    <li><a href="barang.php">Barang</a></li>
                    <li><a href="pegawai.php">Pegawai</a></li>
                    <li><a href="transaksi.php">Transaksi</a></li>
                    <li><a href="login.html">Logout</a></li>
                </ul>
            </td>

            <!-- CONTENT -->
            <td class="content">
                <a href="baranginput.php">Input Data Barang</a>

                <h3>Daftar Barang</h3>

                <table width="100%" border="1">
                    <tr>
                        <td>Id Barang</td>
                        <td>Nama Barang</td>
                        <td>Harga</td>
                        <td>Stok</td>
                        <td>Aksi</td>
                    </tr>

                    <?php
                    include "koneksi.php";
                    $data = mysqli_query($koneksi, "SELECT * FROM barang");
                    while ($tampil = mysqli_fetch_array($data)) {
                    ?>

                    <tr>
                        <td><?php echo $tampil['id_barang']; ?></td>
                        <td><?php echo $tampil['nama_barang']; ?></td>
                        <td><?php echo $tampil['harga']; ?></td>
                        <td><?php echo $tampil['stok']; ?></td>
                        <td><a href="barangedit.php?id=<?php echo $data['id_barang']; ?>">Edit</a></td>
                    </tr>

                    <?php
                    }
                    ?>

                </table>

            </td>
        </tr>

        <!-- FOOTER -->
        <tr>
            <td colspan="2" align="center" class="footer">
                &copy; Asa
            </td>
        </tr>

    </table>

</body>
</html>