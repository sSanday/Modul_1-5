<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Volume Tabung Sandi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #eef2f3;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .box {
            background: white;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        h2 {
            color: #2c3e50;
        }

        p {
            font-size: 18px;
            color: #333;
        }

        span {
            font-weight: bold;
        }
    </style>
</head>

<body>

    <div class="box">
        <h2>Menghitung Volume Tabung</h2>
        <?php
        $phi = 3.14;
        $r = 7;
        $t = 20;

        $volume = $phi * $r * $r * $t;

        echo "<p>Jari-jari (r): <span>$r cm</span></p>";
        echo "<p>Tinggi (t): <span>$t cm</span></p>";
        echo "<p>Volume tabung adalah: <span>$volume cm³</span></p>";
        ?>
    </div>

</body>

</html>