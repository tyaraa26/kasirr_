<?php
require 'functions.php';

if(isset($_POST["submit"])) {
    if(tambah($_POST) > 0){
        echo "<script>
                alert('Data Berhasil Ditambahkan!');
                document.location.href = 'index.php';
              </script>";
    } else {
        echo "<script>
                alert('Data Gagal Ditambahkan!');
                document.location.href = 'index.php';
              </script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Kasir</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Tambah Data Kasir</h1>

<form action="" method="post" enctype="multipart/form-data">

    <ul>
        <li>
            <label>Nama: </label>
            <input type="text" name="nama" required>
        </li>
        <li>
            <label>Harga: </label>
            <input type="number" name="harga" required>
        </li>
        <li>
            <label>Jumlah: </label>
            <input type="number" name="jumlah" required>
        </li>
	<li>
            <label>Stok:</label>
            <input type="number" name="stok" required>
        </li>
        <li>
            <label>Foto Produk :</label>
            <input type="file" name="gambar">
        <li>
            <button type="submit" name="submit">Tambah Data</button>
        </li>
    </ul>
</form>
<a href="index.php">Home</a>

</body>
</html>