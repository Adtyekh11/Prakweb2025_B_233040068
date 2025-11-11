<?php

require_once __DIR__ . '/produk.php';
require_once __DIR__ . '/komik.php';

class Game extends Produk {
    public $waktuMain;

    public function __construct($judul, $penulis, $penerbit, $harga, $waktuMain) {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }

    public function getInfoProduk() {
        $str = "Game: " . parent::getLabel() . " - (Rp. " . $this->harga . ") ~ " . $this->waktuMain . " Jam.";
        return $str;
    }
}

$produk2 = new Game("The Witcher 3", "CD Projekt Red", "CD Projekt", 30000, 100);
$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 20000, 350);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();

?>