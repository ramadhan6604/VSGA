<?php
function hitungBiayaFotokopi($jumlahLembar) {
    // Menghitung biaya berdasarkan jumlah lembar
    if ($jumlahLembar <= 100) {
        $biayaPerLembar = 150;
    } elseif ($jumlahLembar <= 500) {
        $biayaPerLembar = 120;
    } else {
        $biayaPerLembar = 100;
    }

    // Menghitung total biaya sebelum diskon
    $totalBiaya = $jumlahLembar * $biayaPerLembar;

    // Menghitung diskon berdasarkan total biaya
    if ($totalBiaya > 200000) {
        $diskon = 0.10; // Diskon 10%
    } elseif ($totalBiaya > 100000) {
        $diskon = 0.05; // Diskon 5%
    } else {
        $diskon = 0.00; // Tidak ada diskon
    }

    // Menghitung total biaya setelah diskon
    $totalBiayaSetelahDiskon = $totalBiaya - ($totalBiaya * $diskon);

    return $totalBiayaSetelahDiskon;
}

// Contoh penggunaan
$jumlahLembar = 550; // Ganti dengan jumlah lembar yang diinginkan
$totalBiaya = hitungBiayaFotokopi($jumlahLembar);
echo "Total biaya fotokopi untuk $jumlahLembar lembar adalah: Rp" . number_format($totalBiaya, 2, ',', '.');
?>
