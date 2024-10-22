<?php
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];

$transaksi = [
    'nama' => $nama,
    'harga' => $harga,
    'jumlah' => $jumlah,
    'total' => $harga * $jumlah
];

session_start();
if (!isset($_SESSION['penjualan'])) {
    $_SESSION['penjualan'] = [];
}
array_push($_SESSION['penjualan'], $transaksi);

$total_penjualan = 0;
$total_terjual = 0;
foreach ($_SESSION['penjualan'] as $item) {
    $total_penjualan += $item['total'];
    $total_terjual += $item['jumlah'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Data Penjualan</title>
</head>
<body>
    <h1>Laporan Penjualan</h1>
    <table border="1">
        <tr>
            <th>Nama </th>
            <th>Harga Per Produk </th>
            <th>Jumlah Terjual </th>
            <th>Total </th>
        </tr>
<?php foreach ($_SESSION['penjualan'] as $item): ?>
        <tr>
            <td><?php echo $item['nama']; ?></td>
            <td><?php echo $item['harga']; ?></td>
            <td><?php echo $item['jumlah']; ?></td>
            <td><?php echo $item['total']; ?></td>
        </tr>
<?php endforeach; ?>
        <tr>
            <td colspan="2"><strong>Total Penjualan</strong></td>
            <td><?php echo $total_terjual; ?></td>
            <td><?php echo $total_penjualan; ?></td>
        </tr>
</table>
    <a href="index.html">Kembali</a>    
</body>
</html>