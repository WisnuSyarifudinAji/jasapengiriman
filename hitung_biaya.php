<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai jarak dan biaya dari request
    $jarak = $_POST['jarak'];
    $biaya = $_POST['biaya'];

    // Format data untuk disimpan ke dalam file
    $data = "Jarak Pengiriman: $jarak km, Biaya Pengiriman: Rp $biaya\n";

    // Simpan data transaksi ke dalam file transaksi.txt
    $file = 'transaksi.txt';
    file_put_contents($file, $data, FILE_APPEND | LOCK_EX);

    // Response JSON jika perlu
    echo json_encode(['status' => 'success']);

    exit();
}
?>