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
    } elseif ($kondisi == 'lumayan') {
        $denda = 100000;
    } elseif ($kondisi == 'jelek') {
        $denda = 200000;
    } else {
        echo "Kondisi alat tidak valid.";
        exit; // Menghentikan script jika kondisi tidak valid
    }

    // Hitung total keseluruhan
    $seluruh = $total + $denda;

    // Tampilkan hasil
    echo "<h2>Rekap Data Pengembalian</h2>";
    echo "No Rental: " . htmlspecialchars($rental) . "<br>";
    echo "Nama Pelanggan: " . htmlspecialchars($nama) . "<br>";
    echo "Durasi Waktu (Hari): " . htmlspecialchars($hari) . "<br>";
    echo "Kondisi Alat Saat Dikembalikan: " . htmlspecialchars($kondisi) . "<br>";
    echo "Biaya Sewa: Rp " . number_format($total, 0) . "<br>";
    echo "Denda Kerusakan: Rp " . number_format($denda) . "<br>";
    echo "<strong>Total yang Harus Dibayar: Rp " . number_format($seluruh) . "</strong><br>";
 
    echo '<br>';
    echo '<a href="permasalahan.php" style="text-decoration: none; background-color: #007BFF; color: white; padding: 10px 20px; border-radius: 5px;">Back</a>';
    echo ' ';
    echo '<a href="login.php">Logout</a>';

}
?>
