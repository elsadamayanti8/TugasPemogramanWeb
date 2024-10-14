<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            text-align: center; 
        }
        .container {
            display: flex; 
            justify-content: center; 
            margin-top: 20px;
            flex-direction: column; /* Mengatur agar form dan hasil berada dalam kolom */
            align-items: center; /* Menyelaraskan item ke tengah */
        }
        form {
            display: flex;
            flex-direction: column; /* Mengatur input secara vertikal */
            width: 300px; /* Mengatur lebar form */
        }
        input, select, button {
            margin-bottom: 10px; 
        }
        .result {
            margin-top: 20px; /* Memberikan jarak antara form dan hasil */
            text-align: center; /* Menyelaraskan teks hasil ke tengah */
        }
    </style>
</head>
<body>
    <h1>Aplikasi Kalkulator Sederhana</h1>

    <div class="container">
        <form method="POST">
            <div style="display: flex; justify-content: space-between;">
                <input type="number" name="angka1" placeholder="Angka 1" required style="flex: 1; margin-right: 5px;">
                <input type="number" name="angka2" placeholder="Angka 2" required style="flex: 1; margin-left: 5px;">
            </div>
            <select name="operasi" required>
                <option value="">Pilih Operasi</option>
                <option value="+">Tambah (+)</option>
                <option value="-">Kurang (-)</option>
                <option value="*">Kali (*)</option>
                <option value="/">Bagi (/)</option>
            </select>
            <button type="submit">Hitung</button>
        </form>

        <div class="result">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $angka1 = $_POST['angka1'];
                $angka2 = $_POST['angka2'];
                $operasi = $_POST['operasi'];
                $hasil = 0;

                if ($operasi == '+') {
                    $hasil = $angka1 + $angka2;
                } elseif ($operasi == '-') {
                    $hasil = $angka1 - $angka2;
                } elseif ($operasi == '*') {
                    $hasil = $angka1 * $angka2;
                } elseif ($operasi == '/') {
                    if ($angka2 != 0) {
                        $hasil = $angka1 / $angka2;
                    } else {
                        echo "<p>Kesalahan: Tidak bisa membagi dengan nol.</p>";
                    }
                }
                if (isset($hasil)) {
                    echo "<h2>Hasil: $angka1 $operasi $angka2 = $hasil</h2>"; 
                }
            }
            ?>
        </div>
    </div>
</body>
</html>
