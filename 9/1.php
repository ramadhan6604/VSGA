<?php
class Segitiga {
    private $alas;
    private $tinggi;
    private $sisiMiring;
    public function __construct($alas, $tinggi, $sisiMiring = null) {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
        if ($sisiMiring === null) {
            $this->sisiMiring = $this->hitungSisiMiring();
        } else {
            $this->sisiMiring = $sisiMiring;
        }
    }
    public function hitungLuas() {
        return 0.5 * $this->alas * $this->tinggi;
    }
    public function hitungKeliling() {
        return $this->alas + $this->tinggi + $this->sisiMiring;
    }
    public function getAlas() {
        return $this->alas;
    }
    public function getTinggi() {
        return $this->tinggi;
    }
    public function getSisiMiring() {
        return $this->sisiMiring;
    }
    private function hitungSisiMiring() {
        return sqrt(pow($this->alas, 2) + pow($this->tinggi, 2));
    }
}
$segitiga = new Segitiga(10, 5);
echo "Alas Segitiga: " . $segitiga->getAlas() . "\n<br>";
echo "Tinggi Segitiga: " . $segitiga->getTinggi() . "\n<br>";
echo "Sisi Miring Segitiga: " . $segitiga->getSisiMiring() . "\n<br>";
echo "Luas Segitiga: " . $segitiga->hitungLuas() . "\n<br>";
echo "Keliling Segitiga: " . $segitiga->hitungKeliling() . "\n<br>";
?>
