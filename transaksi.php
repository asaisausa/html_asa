<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Transaksi</title>
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
                <a href="transaksiinput.php">Input Data Transaksi</a>
                <h3>Daftar Transaksi</h3>

                <table width="100%" border="1">
                    <tr>
                        <td>ID Transaksi</td>
                        <td>ID Barang</td>
                        <td>Harga</td>
                        <td>Qty</td>
                        <td>Harga Total</td>
                        <td>NIP</td>
                    </tr>

                    <?php
                    include "koneksi.php";

                    $data = mysqli_query($koneksi, "SELECT * FROM transaksi");

                    while ($tampil = mysqli_fetch_array($data)) {
                    ?>

                    <tr>
                        <td><?php echo $tampil['id_transaksi']; ?></td>
                        <td><?php echo $tampil['id_barang']; ?></td>
                        <td><?php echo $tampil['harga']; ?></td>
                        <td><?php echo $tampil['qty']; ?></td>
                        <td><?php echo $tampil['harga_total']; ?></td>
                        <td><?php echo $tampil['nip']; ?></td>
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