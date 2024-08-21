<?php
class Buku {
    private $judul;
    private $penulis;
    private $tahunTerbit;
    public function __construct($judul, $penulis, $tahunTerbit) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->tahunTerbit = $tahunTerbit;
    }
    public function tampilkanInformasi() {
        return "Judul: " . $this->judul . ", Penulis: " . $this->penulis . ", Tahun Terbit: " . $this->tahunTerbit;
    }
    public function getJudul() {
        return $this->judul;
    }}
class Perpustakaan {
    private $koleksiBuku = array();
    public function tambahBuku(Buku $buku) {
        $this->koleksiBuku[] = $buku;
    }
    public function tampilkanSemuaBuku() {
        if (empty($this->koleksiBuku)) {
            return "Tidak ada buku dalam koleksi.";
        }
        $daftarBuku = "";
        foreach ($this->koleksiBuku as $buku) {
            $daftarBuku .= $buku->tampilkanInformasi() . "\n";
        }
        return $daftarBuku;
    }
    public function cariBukuByJudul($judul) {
        foreach ($this->koleksiBuku as $buku) {
            if ($buku->getJudul() === $judul) {
                return $buku->tampilkanInformasi();
            }}
        return "Buku dengan judul '$judul' tidak ditemukan.";}}
$perpustakaan = new Perpustakaan();
$buku1 = new Buku("Belajar PHP", "John Doe", 2022);
$buku2 = new Buku("Pemrograman OOP", "Jane Smith", 2021);
$perpustakaan->tambahBuku($buku1);
$perpustakaan->tambahBuku($buku2);
echo "Semua Buku:\n<br>";
echo $perpustakaan->tampilkanSemuaBuku()."\n<br>";
echo "\nCari Buku:\n<br>";
echo $perpustakaan->cariBukuByJudul("Belajar PHP") . "\n<br>";
echo $perpustakaan->cariBukuByJudul("Non-Existent Book") . "\n<br>";
?>
