<?php
// reservasi_kamar.php - Form Reservasi Kamar Hotel
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservasi Kamar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #eef2f3;
            margin: 0;
            padding: 0;
        }
        header {
            background: #003366;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .form-container {
            width: 400px;
            background: white;
            margin: 40px auto;
            padding: 25px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 10px;
        }
        input, select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 6px;
        }
        button {
            width: 100%;
            padding: 12px;
            background: #0066cc;
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 6px;
            cursor: pointer;
        }
        button:hover {
            background: #004c99;
        }
        .back-link {
            text-align: center;
            margin-top: 15px;
        }
    </style>
</head>
<body>

<header>
    <h1>Form Reservasi Kamar</h1>
</header>

<div class="form-container">
    <form action="proses_reservasi.php" method="POST">

        <label>Nama Pelangan</label>
        <input type="text" name="nama" required>

        <label>Nomor Identitas (KTP/SIM)</label>
        <input type="text" name="identitas" required>

        <label>Tipe Kamar</label>
        <select name="tipe_kamar" required>
            <option value="Standar">Standar</option>
            <option value="Deluxe">Deluxe</option>
            <option value="Suite">Suite</option>
        </select>

        <label>Tanggal Check-in</label>
        <input type="date" name="checkin" required>

        <label>Tanggal Check-out</label>
        <input type="date" name="checkout" required>

        <button type="submit">Reservasi Sekarang</button>
    </form>

    <div class="back-link">
        <a href="menuutama.php">&larr; Kembali ke Menu Utama</a>
    </div>
</div>

</body>
</html>