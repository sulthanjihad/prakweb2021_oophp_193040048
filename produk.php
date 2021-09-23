<?php



// class Produk {
//     public $judul = "judul",
//             $penulis = "penulis",
//             $penerbit = "penerbit",
//             $harga = 0;

//     public function getLabel(){
//         return "$this->penulis, $this->penerbit";
    
//     }

// }

// $produk1 = new Produk();
// $produk1->judul = "keluh selatan";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "selatan";
// $produk2->tambahproperty = "haha";
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "keluh selatan";
$produk3->penulis = "sulthan jihad abiyyu";
$produk3->penerbit = "wattpad";
$produk3->harga = 30000;

echo"Komik : $produk3->penulis, $produk3->penerbit";
echo "<br>";

$produk4 = new Produk();
$produk4->judul = "uncharted";
$produk4->penulis = "neil druckmann";
$produk4->penerbit = "sony computer";
$produk4->harga = 250000;

echo "Komik : " . $produk4->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();