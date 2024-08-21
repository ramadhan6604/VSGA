<?php

$length = 5; 
$width = 3; 

$area = $length * $width;

$perimeter = 2 * ($length + $width);

$diagonal = sqrt(pow($length, 2) + pow($width, 2));

echo "Panjang: $length\n<br>";
echo "Lebar: $width\n<br>";
echo "Luas: $area\n<br>";
echo "Keliling: $perimeter\n<br>";
echo "Panjang Diagonal: " . number_format($diagonal, 2) . "\n";
?>
