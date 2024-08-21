<?php

$angka = array(23, 24, 24, 30, 34, 35, 40, 40, 46, 47);


echo "Angka " . implode(", ", $angka) . "\n<br>";

$total = array_sum($angka);
echo "Total: " . $total . "\n<br>";


$mean = $total / count($angka);
echo "Mean: " . $mean . "\n<br>";


sort($angka); 
$count = count($angka);
$middle = floor(($count-1) / 2);
if ($count % 2) { 
    $median = $angka[$middle];
} else {
    $median = ($angka[$middle] + $angka[$middle + 1]) / 2.0;
}
echo "Median: " . $median . "\n<br>";

// Menampilkan angka ganjil
$ganjil = array_filter($angka, function($num) {
    return $num % 2 != 0;
});
echo "Angka Ganjil: " . implode(", ", $ganjil) . "\n<br>";



?>
