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



$produk1 = new Produk("keluh selatan", "sulthan jihad abiyyu", "wattpad", 30000);
echo "<br>";
$produk2 = new Produk("uncharted", "neil druckmann", "sony computer", 250000);
$produk3 = new Produk("dragon ball");

echo "Komik : " . $produk1->getLabel();
echo "<br>"; 
echo "Game : " . $produk2->getLabel();
echo "<br>";
var_dump($produk3);