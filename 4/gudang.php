<?php

$product_name = "Laptop";
$product_quantity = 10;
$product_price = 750.00;
$product_availability = true; 


$total_inventory_value = $product_quantity * $product_price;


$status = $product_availability ? "Tersedia" : "Tidak Tersedia";


echo "Laporan Inventaris:\n<br>";
echo "Nama Produk: $product_name\n<br>";
echo "Jumlah Produk: $product_quantity\n<br>";
echo "Harga per Produk: $" . number_format($product_price, 2) . "\n<br>";
echo "Total Nilai Inventaris: $" . number_format($total_inventory_value, 2) . "\n<br>";
echo "Status Ketersediaan: $status\n";
?>
