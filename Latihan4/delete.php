<?php
include 'koneksi.php';

$id = $_GET['id'];
$query = "DELETE FROM laporan_penjualan WHERE id = $id";
$mysqli->query($query);
header("Location: index.php");
?>