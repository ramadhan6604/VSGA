<?php

$nim = "12345678";
$name = "budi";
$nilai_q1 = 85;
$nilai_q2 = 90;
$nilai_uts = 78;
$nilai_uas = 88;
$nilai_proyek = 92;

$nilai_akhir = (0.1 * $nilai_q1) + (0.1 * $nilai_q2) + (0.1 * $nilai_uts) + (0.2 * $nilai_uas) + (0.5 * $nilai_proyek);

$status_kelulusan = $nilai_akhir > 60 ? "Lulus" : "Tidak Lulus";

echo "NIM: $nim\n<br>";
echo "Nama: $name\n<br>";
echo "Nilai Quiz 1: $nilai_q1\n<br>";
echo "Nilai Quiz 2: $nilai_q2\n<br>";
echo "Nilai UTS: $nilai_uts\n<br>";
echo "Nilai UAS: $nilai_uas\n<br>";
echo "Nilai Proyek: $nilai_proyek\n<br>";
echo "Nilai Akhir: " . number_format($nilai_akhir, 2) . "\n<br>";
echo "Status Kelulusan: $status_kelulusan\n";
?>
