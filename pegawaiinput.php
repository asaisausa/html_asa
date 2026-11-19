<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pegawai</title>
    <link rel="stylesheet" href="css/pegawaiinput.css">
</head>
<body>
    <main class="form-card">
        <h1>Tambah Pegawai</h1>
        <p>Isi data pegawai pada form berikut.</p>

        <form action="pegawaiinputaksi.php" method="post">
            <label for="nip">NIP</label>
            <input type="text" id="nip" name="nip">

            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama">

            <label for="alamat">Alamat</label>
            <input type="text" id="alamat" name="alamat">

            <label for="username">Username</label>
            <input type="text" id="username" name="username">

            <label for="password">Password</label>
            <input type="password" id="password" name="password">

            <input type="submit" value="Simpan">
        </form>
    </main>
</body>
</html>