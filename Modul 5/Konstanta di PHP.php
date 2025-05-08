<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Contoh Konstanta di PHP Sandi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
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
            color: #34495e;
        }

        p {
            font-size: 16px;
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
        <h2>Contoh Penggunaan Konstanta PHP</h2>

        <?php
        define("SITE_NAME", "Belajar PHP Dasar");
        define("PI", 3.14);

        const NEGARA = "Indonesia";

        echo "<p><strong>SITE_NAME:</strong> " . SITE_NAME . "</p>";
        echo "<p><strong>PI:</strong> " . PI . "</p>";
        echo "<p><strong>NEGARA:</strong> " . NEGARA . "</p>";
        ?>
    </div>

</body>

</html>