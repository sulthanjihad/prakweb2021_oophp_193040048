<?php



class Produk {
    public $judul,
            $penulis,
            $penerbit,
            $harga;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    
    }

}

class CetakInfoProduk{
    public function cetak( Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()}, shonen Jump (Rp. {$produk->harga})";
        return $str;
    }
}




$produk1 = new Produk("keluh selatan", "sulthan jihad abiyyu", "wattpad", 30000);
echo "<br>";
$produk2 = new Produk("uncharted", "neil druckmann", "sony computer", 250000);


echo "Komik : " . $produk1->getLabel();
echo "<br>"; 
echo "Game : " . $produk2->getLabel();
echo "<br>"; 
$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);