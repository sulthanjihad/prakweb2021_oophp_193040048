<?php

class Produk {
    public $judul,
            $penulis,
            $penerbit,
            $harga,
            $jmlHalaman,
            $waktuMain,
            $tipe;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    
    }

    public function getInfoLengkap(){

    $str = "{$this->tipe} : {this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

     return $str;
    }

}

class Komik extends Produk {
    public function getInfoProduk(){
        $str = "Komik : {this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}


class CetakInfoProduk{
    public function cetak( Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()}, shonen Jump (Rp. {$produk->harga})";
        return $str;
    }
}

$produk1 = new Komik("keluh selatan", "sulthan jihad abiyyu", "wattpad", 30000, 100, 0, "Komik" );
echo "<br>";
$produk2 = new Produk("uncharted", "neil druckmann", "sony computer", 250000, 0, 50, "Game");

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
