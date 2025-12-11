<?php
// proses_reservasi.php - Memproses data reservasi dan menyimpannya ke file pelanggan.php atau database (versi sederhana)
// Versi ini memakai penyimpanan file JSON sebagai latar belakang sehingga pelanggan.php dapat membaca datanya

// Ambil data dari form
$nama      = $_POST['nama'] ?? '';
$identitas = $_POST['identitas'] ?? '';
$tipe      = $_POST['tipe_kamar'] ?? '';
$checkin   = $_POST['checkin'] ?? '';
$checkout  = $_POST['checkout'] ?? '';

// Validasi sederhana
if ($nama == '' || $identitas == '' || $tipe == '' || $checkin == '' || $checkout == '') {
    die('Data tidak lengkap.');
}

// Lokasi file penyimpanan
$file = 'data_pelanggan.json';

// Jika file belum ada, buat array kosong
if (!file_exists($file)) {
    file_put_contents($file, json_encode([]));
}

// Ambil data lama
data_old = json_decode(file_get_contents($file), true);

// Tambah data baru
$data_old[] = [
    'nama'      => $nama,
    'identitas' => $identitas,
    'tipe'      => $tipe,
    'checkin'   => $checkin,
    'checkout'  => $checkout
];

// Simpan kembali
file_put_contents($file, json_encode($data_old, JSON_PRETTY_PRINT));

// Redirect kembali
header('Location: pelanggan.php');
exit();
?>
