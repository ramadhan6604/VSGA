<?php
function hitungHargaAkhir($jumlahProduk, $hargaSatuan) {
    // Menghitung total harga sebelum diskon
    $totalHarga = $jumlahProduk * $hargaSatuan;
    
    // Menghitung diskon berdasarkan jumlah pembelian
    if ($jumlahProduk > 20) {
        $diskon = 0.20; // Diskon 20%
    } elseif ($jumlahProduk > 10) {
        $diskon = 0.10; // Diskon 10%
    } else {
        $diskon = 0.00; // Tidak ada diskon
    }
    
    // Menghitung total harga setelah diskon
    $totalSetelahDiskon = $totalHarga - ($totalHarga * $diskon);
    
    // Menentukan apakah pengiriman gratis berlaku
    if ($totalSetelahDiskon > 500000) {
        $pengirimanGratis = true;
    } else {
        $pengirimanGratis = false;
    }
    
    // Mengembalikan harga akhir dan status pengiriman gratis
    return array('hargaAkhir' => $totalSetelahDiskon, 'pengirimanGratis' => $pengirimanGratis);
}

// Contoh penggunaan
$jumlahProduk = 25; // Ganti dengan jumlah produk yang dibeli
$hargaSatuan = 25200; // Ganti dengan harga satuan produk

$hasil = hitungHargaAkhir($jumlahProduk, $hargaSatuan);

echo "Harga akhir setelah diskon: Rp" . number_format($hasil['hargaAkhir'], 2, ',', '.') . "\n";
echo "Pengiriman gratis: " . ($hasil['pengirimanGratis'] ? "Ya" : "Tidak") . "\n";
?>
