<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Contoh Type Casting Integer di PHP Sandi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f3f3;
            padding: 30px;
        }

        .container {
            background-color: #ffffff;
            max-width: 600px;
            margin: auto;
            padding: 20px 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #2c3e50;
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
        }

        p {
            font-size: 16px;
            color: #333;
        }

        code {
            background-color: #efefef;
            padding: 2px 6px;
            border-radius: 4px;
            font-family: monospace;
        }
    </style>
</head>

<body>

    <div class="container">
        <h2>Contoh Type Casting ke Integer (int)</h2>
        <?php
        $floatNumber = 12.75;
        $stringNumber = "45";
        $booleanValue = true;
        $text = "123abc";

        echo "<p><strong>Asli (float):</strong> $floatNumber <br>";
        echo "Setelah casting (int): <strong>" . (int)$floatNumber . "</strong></p>";

        echo "<p><strong>Asli (string):</strong> \"$stringNumber\" <br>";
        echo "Setelah casting (int): <strong>" . (int)$stringNumber . "</strong></p>";

        echo "<p><strong>Asli (boolean):</strong> " . ($booleanValue ? 'true' : 'false') . "<br>";
        echo "Setelah casting (int): <strong>" . (int)$booleanValue . "</strong></p>";

        echo "<p><strong>Asli (string campuran):</strong> \"$text\" <br>";
        echo "Setelah casting (int): <strong>" . (int)$text . "</strong></p>";
        ?>
    </div>

</body>

</html>