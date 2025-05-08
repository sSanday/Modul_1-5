<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Penugasan Variabel PHP Sandi</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f4f4f9;
            padding: 40px;
        }

        .container {
            background: #ffffff;
            max-width: 600px;
            margin: auto;
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
            border-bottom: 2px solid #e0e0e0;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        p {
            font-size: 16px;
            color: #444;
            line-height: 1.6;
        }

        code {
            background: #f0f0f0;
            padding: 2px 6px;
            border-radius: 4px;
            font-family: monospace;
        }
    </style>
</head>

<body>

    <div class="container">
        <h2>Penugasan Variabel dalam PHP</h2>
        <?php
        // Penugasan variabel
        $int_tujuh = 7;
        $nama = "Firnanda";
        $isMahasiswa = true;
        $nilai = 87.5;

        echo "<p><strong>Penugasan yang benar:</strong><br><code>\$int_tujuh = 7;</code></p>";
        echo "<p><strong>Penugasan yang salah:</strong><br><code>7 = \$int_tujuh; // Ini akan error</code></p>";

        echo "<h2>Contoh Penggunaan Variabel dan Tipe Datanya</h2>";

        echo "<p>Isi \$int_tujuh: <strong>$int_tujuh</strong><br>";
        echo "Tipe data: <em>" . gettype($int_tujuh) . "</em></p>";

        echo "<p>Isi \$nama: <strong>$nama</strong><br>";
        echo "Tipe data: <em>" . gettype($nama) . "</em></p>";

        echo "<p>Isi \$isMahasiswa: <strong>" . ($isMahasiswa ? 'true' : 'false') . "</strong><br>";
        echo "Tipe data: <em>" . gettype($isMahasiswa) . "</em></p>";

        echo "<p>Isi \$nilai: <strong>$nilai</strong><br>";
        echo "Tipe data: <em>" . gettype($nilai) . "</em></p>";
        ?>
    </div>

</body>

</html>