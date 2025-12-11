<?php
// laporan.php - Laporan Reservasi Hotel
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Reservasi Hotel</title>
    <style>
        body { font-family: Arial, sans-serif; background: #eef2f3; margin: 0; padding: 0; }
        header { background: #003366; color: white; padding: 20px; text-align: center; }
        .table-container { width: 85%; margin: 40px auto; background: white; padding: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1); border-radius: 10px; }
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 12px; border-bottom: 1px solid #ddd; text-align: center; }
        th { background: #0066cc; color: white; }
        tr:hover { background: #f1f1f1; }
        .total-box { margin-top: 20px; padding: 15px; background: #0066cc; color: white;
            font-size: 18px; border-radius: 8px; text-align: center; }
        .back-link { text-align: center; margin-top: 20px; }
    </style>
</head>
<body>

<header>
    <h1>Laporan Reservasi Hotel</h1>
</header>

<div class="table-container">
    <table>
        <tr>
            <th>Nama</th>
            <th>No Identitas</th>
            <th>Tipe Kamar</th>
            <th>Check-in</th>
            <th>Check-out</th>
            <th>Lama Menginap (hari)</th>
            <th>Total Biaya</th>
        </tr>

        <?php
        // Contoh tarif kamar
        $tarif = [
            'Standar' => 300000,
            'Deluxe'  => 500000,
            'Suite'   => 800000
        ];

        // Contoh data laporan (bisa diganti database)
        $laporan = [
            ['Andi Wijaya', '321654987', 'Deluxe', '2025-06-01', '2025-06-03'],
            ['Siti Nurhaliza', '987456321', 'Standar', '2025-06-02', '2025-06-05'],
            ['Budi Santoso', '123789456', 'Suite', '2025-06-04', '2025-06-07']
        ];

        $grandTotal = 0;

        foreach ($laporan as $data) {
            $checkin  = strtotime($data[3]);
            $checkout = strtotime($data[4]);
            $lama = ($checkout - $checkin) / (60 * 60 * 24);
            $biaya = $lama * $tarif[$data[2]];
            $grandTotal += $biaya;

            echo '<tr>' .
                '<td>' . $data[0] . '</td>' .
                '<td>' . $data[1] . '</td>' .
                '<td>' . $data[2] . '</td>' .
                '<td>' . $data[3] . '</td>' .
                '<td>' . $data[4] . '</td>' .
                '<td>' . $lama . '</td>' .
                '<td>Rp ' . number_format($biaya, 0, ',', '.') . '</td>' .
                '</tr>';
        }
        ?>
    </table>

    <div class="total-box">
        <strong>Total Pendapatan:</strong> Rp <?php echo number_format($grandTotal, 0, ',', '.'); ?>
    </div>

    <div class="back-link">
        <a href="menuutama.php">&larr; Kembali ke Menu Utama</a>
    </div>
</div>

</body>
</html>
