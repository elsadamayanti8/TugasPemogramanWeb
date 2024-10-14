<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Penilaian Mahasiswa</title>
</head>
<body>
    <h1>Aplikasi Penilaian Mahasiswa</h1>

    <div class="container">
        <form method="POST">
            <input type="number" name="mk1" placeholder="Nilai Mata Kuliah 1" min="0" max="100" required>
            <input type="number" name="mk2" placeholder="Nilai Mata Kuliah 2" min="0" max="100" required>
            <input type="number" name="mk3" placeholder="Nilai Mata Kuliah 3" min="0" max="100" required>
            <button type="submit">Proses</button>
        </form>

        <div class="result">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $nilai_mk1 = $_POST['mk1'];
                $nilai_mk2 = $_POST['mk2'];
                $nilai_mk3 = $_POST['mk3'];
                $status_kelulusan = '';
                $nilai_rata_rata = ($nilai_mk1 + $nilai_mk2 + $nilai_mk3) / 3;

                if ($nilai_rata_rata >= 69) {
                    $status_kelulusan = 'Lulus ✅';
                } else {
                    $status_kelulusan = 'Tidak Lulus ❌';
                }

                echo "<h2>Hasil Penilaian:</h2>";
                echo "<p>Rata-rata Nilai: <strong>" . number_format($nilai_rata_rata, 2) . "</strong></p>";
                echo "<p>Status Kelulusan: <strong>$status_kelulusan</strong></p>";
            }
            ?>
        </div>
    </div>
</body>
</html>