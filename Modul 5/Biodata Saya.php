<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Biodata Saya Sandi</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f1f1f1;
            padding: 40px;
        }

        .biodata-box {
            background: #fff;
            max-width: 500px;
            margin: auto;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #333;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            margin: 10px 0;
            font-size: 16px;
        }

        span.label {
            font-weight: bold;
            color: #555;
            width: 120px;
            display: inline-block;
        }
    </style>
</head>

<body>

    <div class="biodata-box">
        <h2>Biodata Saya</h2>
        <ul>
            <?php
            echo "<li><span class='label'>Nama:</span> Muhammad Sandi Zakariya</li>";
            echo "<li><span class='label'>NIM:</span> 23083000119</li>";
            echo "<li><span class='label'>Tempat, Tgl Lahir:</span> Malang, 11 Agustus 2002</li>";
            echo "<li><span class='label'>Jenis Kelamin:</span> Laki-laki</li>";
            echo "<li><span class='label'>Alamat:</span> Jl. Flamboyan No.14, Batu</li>";
            echo "<li><span class='label'>Email:</span> sandizakaria77@gmail.com</li>";
            echo "<li><span class='label'>Hobi:</span> Ngoding, Desain, Game</li>";
            ?>
        </ul>
    </div>

</body>

</html>