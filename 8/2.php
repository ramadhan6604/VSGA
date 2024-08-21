<?php

// Array multidimensi untuk menyimpan data produk
$produk = array(
    array("nama" => "Produk A", "harga" => 100000, "stok" => 150),
    array("nama" => "Produk B", "harga" => 200000, "stok" => 30),
    array("nama" => "Produk C", "harga" => 150000, "stok" => 80),
    array("nama" => "Produk D", "harga" => 50000, "stok" => 100),
    array("nama" => "Produk E", "harga" => 120000, "stok" => 60)
);

// Menampilkan data produk menggunakan foreach
echo "Data Produk:\n<br>";
foreach ($produk as $item) {
    echo "Nama: " . $item["nama"] . ", Harga: " . $item["harga"] . ", Stok: " . $item["stok"] . "\n<br>";
}
echo "<br>";
// Mencari produk dengan stok paling banyak
$stok_terbanyak = $produk[0];
foreach ($produk as $item) {
    if ($item["stok"] > $stok_terbanyak["stok"]) {
        $stok_terbanyak = $item;
    }
}
echo "Produk dengan Stok Terbanyak:\n<br>";
echo "Nama: " . $stok_terbanyak["nama"] . ", Harga: " . $stok_terbanyak["harga"] . ", Stok: " . $stok_terbanyak["stok"] . "\n<br>";

// Mencari produk dengan harga paling murah
$harga_termurah = $produk[0];
foreach ($produk as $item) {
    if ($item["harga"] < $harga_termurah["harga"]) {
        $harga_termurah = $item;
    }
}
echo "Produk dengan Harga Termurah:\n<br>";
echo "Nama: " . $harga_termurah["nama"] . ", Harga: " . $harga_termurah["harga"] . ", Stok: " . $harga_termurah["stok"] . "\n<br>";

?>
