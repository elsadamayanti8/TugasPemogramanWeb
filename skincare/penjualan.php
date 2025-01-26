<?php
include 'db.php';

// Tambah penjualan
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $produk_id = $_POST['produk_id'];
    $jumlah = $_POST['jumlah'];
    $tanggal = $_POST['tanggal'];

    $query = "INSERT INTO penjualan (produk_id, jumlah, tanggal) VALUES ('$produk_id', '$jumlah', '$tanggal')";
    mysqli_query($conn, $query);
    header('Location: penjualan.php');
}

// Hapus penjualan
if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    $query = "DELETE FROM penjualan WHERE id_penjualan = $id";
    mysqli_query($conn, $query);
    header('Location: penjualan.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Penjualan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1 class="text-center mb-4">Manajemen Penjualan</h1>
        
        <!-- Form Tambah Penjualan -->
        <div class="card mb-4">
            <div class="card-header bg-primary text-white">
                Tambah Penjualan
            </div>
            <div class="card-body">
                <form method="POST">
                    <div class="mb-3">
                        <label for="produk_id" class="form-label">Produk</label>
                        <select id="produk_id" name="produk_id" class="form-control">
                            <?php
                            $produk_query = "SELECT * FROM produk";
                            $produk_result = mysqli_query($conn, $produk_query);
                            while ($produk = mysqli_fetch_assoc($produk_result)) {
                                echo "<option value='{$produk['id_produk']}'>{$produk['nama_produk']}</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="jumlah" class="form-label">Jumlah</label>
                        <input type="number" class="form-control" id="jumlah" name="jumlah" required>
                    </div>
                    <div class="mb-3">
                        <label for="tanggal" class="form-label">Tanggal</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>

        <!-- Tabel Data Penjualan -->
        <div class="card">
            <div class="card-header bg-success text-white">
                Daftar Penjualan
            </div>
            <div class="card-body">
                <table class="table table-bordered table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Nama Produk</th>
                            <th>Jumlah</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT penjualan.*, produk.nama_produk FROM penjualan 
                                  INNER JOIN produk ON penjualan.produk_id = produk.id_produk";
                        $result = mysqli_query($conn, $query);
                        $no = 1;
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>
                                    <td>{$no}</td>
                                    <td>{$row['nama_produk']}</td>
                                    <td>{$row['jumlah']}</td>
                                    <td>{$row['tanggal']}</td>
                                    <td>
                                        <a href='penjualan.php?hapus={$row['id_penjualan']}' class='btn btn-danger btn-sm' onclick='return confirm(\"Yakin ingin menghapus data ini?\")'>Hapus</a>
                                    </td>
                                  </tr>";
                            $no++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>