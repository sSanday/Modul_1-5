<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Contoh Logika AND dan OR di PHP Sandi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #eef2f3;
            padding: 40px;
        }

        .container {
            background-color: white;
            max-width: 600px;
            margin: auto;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #2c3e50;
        }

        p {
            font-size: 16px;
            margin: 10px 0;
        }

        code {
            background-color: #f0f0f0;
            padding: 2px 6px;
            border-radius: 4px;
            font-family: monospace;
        }
    </style>
</head>

<body>

    <div class="container">
        <h2>Contoh Logika AND dan OR</h2>

        <?php
        $umur = 20;
        $punyaKTP = true;

        // Logika AND (Konjungsi)
        if ($umur >= 17 && $punyaKTP) {
            echo "<p><strong>Logika AND:</strong> Anda boleh membuat SIM.</p>";
        } else {
            echo "<p><strong>Logika AND:</strong> Anda belum bisa membuat SIM.</p>";
        }

        $lulusTeori = true;
        $lulusPraktek = false;

        // Logika OR (Disjungsi)
        if ($lulusTeori || $lulusPraktek) {
            echo "<p><strong>Logika OR:</strong> Anda bisa mengikuti ujian ulang salah satu bagian.</p>";
        } else {
            echo "<p><strong>Logika OR:</strong> Anda harus mengulang dari awal.</p>";
        }
        ?>
    </div>

</body>

</html>