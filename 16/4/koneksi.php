<?php
$host = 'localhost'; // atau alamat host database
$user = 'root'; // username database
$pass = ''; // password database
$dbname = 'tsa_web'; // nama database

$connect = new mysqli($host, $user, $pass, $dbname);

// Periksa koneksi
if ($connect->connect_error) {
    die('Koneksi gagal: ' . $connect->connect_error);
}
?>
