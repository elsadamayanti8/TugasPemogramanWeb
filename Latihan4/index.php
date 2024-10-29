<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Penjualan</title>
</head>
<body>
<h1>Laporan Penjualan</h1>
    <a href="form_tambah.php">Tambah Laporan Baru</a>
    <br>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Tanggal Penjualan</th>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Jumlah Terjual</th>
            <th>Total Penjualan</th>
            <th>Aksi</th>
        </tr>
<?php
include 'koneksi.php';

$query = "SELECT * FROM laporan_penjualan";
        $result = $mysqli-> query($query);

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
          <td>{$row['id']}</td>
          <td>{$row['tanggal_penjualan']}</td>
          <td>{$row['nama_produk']}</td>
          <td>{$row['harga']}</td>
          <td>{$row['jumlah_terjual']}</td>
          <td>{$row['total_penjualan']}</td>
          <td>
              <a href='edit.php?id={$row['id']}'>Edit</a>
              <a href='delete.php?id={$row['id']}'>Hapus</a>
          </td>
          </tr>";
}
?>
</table>
</body>
</html>