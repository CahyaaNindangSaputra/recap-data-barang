<?php
if (isset($_POST['submit'])) {
    $rental = $_POST['rental'];
    $nama = $_POST['nama'];
    $hari = $_POST['hari'];
    $kondisi = $_POST['kondisi'];

    // Hitung biaya sewa
    $total = $hari * 75000;

    // Hitung biaya tambahan/denda berdasarkan kondisi
    if ($kondisi == 'bagus') {
        $denda = 50000;
    } else if ($kondisi == 'lumayan') {
        $denda = 100000;
    } else if ($kondisi == 'jelek') {
        $denda = 200000;
    } else {
        echo "Kondisi alat tidak valid.";
        exit; // Menghentikan script jika kondisi tidak valid
    }

    // Hitung total keseluruhan
    $seluruh = $total + $denda;

    // Tampilkan hasil
    echo "<h2>Rekap Data Pengembalian</h2>";
    echo "No Rental: $rental<br>";
    echo "Nama Pelanggan: $nama<br>";
    echo "Durasi Waktu (Hari): $hari<br>";
    echo "Kondisi Alat Saat Dikembalikan: $kondisi<br>";
    echo "Biaya Sewa: Rp " . number_format($total, 0, ',', '.') . "<br>";
    echo "Denda Kerusakan: Rp " . number_format($denda, 0, ',', '.') . "<br>";
    echo "<strong>Total yang Harus Dibayar: Rp " . number_format($seluruh, 0, ',', '.') . "</strong><br>";
}
?>
