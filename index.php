<?php
require 'functions.php';
$kasir = query("SELECT * FROM dkasir");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Kasir</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Data Kasir</h1>

<a href="tambah.php">Tambah Data</a>
<br><br>

<table border="1" cellpadding="10" cellspacing="0" width="80%">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Harga</th>
        <th>Jumlah</th>
	<th>stok</th>
	<th>Gambar</th>
        <th>Aksi</th>
    </tr>

    <?php $i = 1; ?>
    <?php foreach ($kasir as $row) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $row['nama']; ?></td>
            <td><?= $row['harga']; ?></td>
            <td><?= $row['jumlah']; ?></td>
	        <td><?= $row['stok']; ?></td>
            <td>
                <a href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a> |
                <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin dek?');">Hapus</a>
            </td>
             <td>
                <img src="gambar/<?= $row["gambar"]; ?>" class="gambarproduk" alt="gambar" width="70" height="70">
    </td>
        </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
</table>

</body>
</html>