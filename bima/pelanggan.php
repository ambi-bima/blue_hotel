<?php
// data_pelanggan.php - Data Pelanggan Hotel
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pelanggan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        header {
            background: #003366;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .table-container {
            width: 80%;
            margin: 40px auto;
            background: white;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 10px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
            text-align: center;
        }
        th {
            background: #0066cc;
            color: white;
        }
        tr:hover {
            background: #f1f1f1;
        }
        .back-link {
            text-align: center;
            margin-top: 15px;
        }
    </style>
</head>
<body>

<header>
    <h1>Data Pelanggan Hotel</h1>
</header>

<div class="table-container">
    <table>
        <tr>
            <th>Nama Pelanggan</th>
            <th>No Identitas</th>
            <th>Tipe Kamar</th>
            <th>Check-in</th>
            <th>Check-out</th>
        </tr>

        <?php
        // Contoh data pelanggan (bisa diganti dengan database)
        $pelanggan = [
            ['Andi Wijaya', '321654987', 'Deluxe', '2025-06-01', '2025-06-03'],
            ['Siti Nurhaliza', '987456321', 'Standar', '2025-06-02', '2025-06-05'],
            ['Budi Santoso', '123789456', 'Suite', '2025-06-04', '2025-06-07']
        ];

        foreach ($pelanggan as $data) {
            echo "<tr>
                    <td>{$data[0]}</td>
                    <td>{$data[1]}</td>
                    <td>{$data[2]}</td>
                    <td>{$data[3]}</td>
                    <td>{$data[4]}</td>
                  </tr>";
        }
        ?>
    </table>

    <div class="back-link">
        <a href="menuutama.php">&larr; Kembali ke Menu Utama</a>
    </div>
</div>

</body>
</html>
