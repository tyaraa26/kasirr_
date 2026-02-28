<?php
//koneksi ke DBMS
require 'functions.php';
//ambil data di URl
$id = $_GET["id"];
//query data kasir berdasarkan id
$k = query("SELECT * FROM dkasir WHERE id = $id")[0];

if(isset($_POST["submit"])) {
    if(ubah($_POST) > 0){
        echo "<script>
                alert('Data Berhasil Diubah!');
                document.location.href = 'index.php';
              </script>";
    } else {
        echo "<script>
                alert('Data Gagal Diubah!');
              </script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ubah Data Kasir</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Ubah Data Kasir</h1>

<form action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $k['id']; ?>">
    <ul>
        <li>
            <label>Nama: </label>
            <input type="text" name="nama" value="<?= $k['nama']; ?>" required>
        </li>
        <li>
            <label>Harga: </label>
            <input type="number" name="harga" value="<?= $k['harga']; ?>" required>
        </li>
        <li>
            <label>Jumlah: </label>
            <input type="number" name="jumlah" value="<?= $k['jumlah']; ?>" required>
        </li>
	<li>
            <label>Stok:</label>
            <input type="number" name="stok" value="<?= $k['stok']; ?>" required>
        </li>
         <li>
            <label>Foto Produk :</label>
            <input type="file" name="gambar">
	    <input type="hidden" name="gambarLama" value="<?= $k['gambar']; ?>">
       </li>
        <li>
            <button type="submit" name="submit">Ubah Data</button>
        </li>
    </ul>
</form>
<a href="index.php">Home</a>

</body>
</html>