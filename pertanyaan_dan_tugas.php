<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Sederhana</title>
</head>
<body>
    <h1>Form Input Data Diri</h1>
    <form method="POST">
        Nama: <input type="text" name="nama" required><br><br>
        Tanggal Lahir: <input type="date" name="tanggal_lahir" required><br><br>
        Pekerjaan:
        <select name="pekerjaan" required>
            <option value="">Pilih Pekerjaan</option>
            <option value="Programmer">Programmer</option>
            <option value="Desainer">Desainer</option>
            <option value="Analisis Data">Analisis Data</option>
            <option value="Manajer Proyek">Manajer Proyek</option>
        </select><br><br>
        <input type="submit" value="Kirim">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST['nama'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $pekerjaan = $_POST['pekerjaan'];

        // Menghitung umur
        $umur = date_diff(date_create($tanggal_lahir), date_create('today'))->y;

        // Menentukan gaji
        $gaji = 0;
        if ($pekerjaan == 'Programmer') $gaji = 10000000;
        elseif ($pekerjaan == 'Desainer') $gaji = 8000000;
        elseif ($pekerjaan == 'Analisis Data') $gaji = 9000000;
        elseif ($pekerjaan == 'Manajer Proyek') $gaji = 12000000;

        // Menampilkan hasil
        echo "<h2>Hasil Input:</h2>";
        echo "Nama: $nama<br>";
        echo "Tanggal Lahir: " . date('d-m-Y', strtotime($tanggal_lahir)) . "<br>";
        echo "Umur: $umur tahun<br>";
        echo "Pekerjaan: $pekerjaan<br>";
        echo "Gaji: Rp " . number_format($gaji, 0, ',', '.') . "<br>";
    }
    ?>
</body>
</html>