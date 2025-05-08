<!DOCTYPE html>
<html>

<head>
    <title>Daftar Nilai Sandi</title>
</head>

<body>
    <h2>Form Input Nilai</h2>
    <form method="post" action="">
        Nama: <input type="text" name="nama" required><br><br>
        Nilai: <input type="number" name="nilai" required><br><br>
        <input type="submit" value="Kirim">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST['nama'];
        $nilai = $_POST['nilai'];
        $hasil = "";

        if ($nilai > 80) {
            $hasil = "A";
        } elseif ($nilai >= 70 && $nilai <= 79) {
            $hasil = "B";
        } elseif ($nilai >= 60 && $nilai <= 69) {
            $hasil = "C";
        } elseif ($nilai >= 50 && $nilai <= 59) {
            $hasil = "D";
        } else {
            $hasil = "Tidak Lulus";
        }

        echo "<h3>Hasil:</h3>";
        echo "Nama: $nama<br>";
        echo "Nilai: $nilai<br>";
        echo "Keterangan: $hasil";
    }
    ?>
</body>

</html>