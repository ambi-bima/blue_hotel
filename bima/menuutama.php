<?php
// hotel.php - Menu Utama Hotel
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Utama Hotel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            margin: 0;
            padding: 0;
        }
        header {
            background: #003366;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .menu-container {
            margin: 40px auto;
            width: 300px;
            background: white;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 10px;
        }
        .menu-container a {
            display: block;
            text-decoration: none;
            background: #0066cc;
            color: white;
            padding: 12px;
            margin: 10px 0;
            text-align: center;
            border-radius: 6px;
        }
        .menu-container a:hover {
            background: #004c99;
        }
    </style>
</head>
<body>

<header>
    <h1>Menu Utama Hotel</h1>
</header>

<div class="menu-container">
    <a href="reservasi.php">Reservasi Kamar</a>
    <a href="daftar.php">Daftar Kamar</a>
    <a href="pelanggan.php">Data Pelanggan</a>
    <a href="laporan.php">Laporan</a>
    <a href="logout.php">Logout</a>
</div>

</body>
</html>