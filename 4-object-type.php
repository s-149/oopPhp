<?php

/**
 * object type
 */
class Produk {
	// membuat property
	public 	$judul,
			$penulis,
			$penerbit,
			$harga;

	// membuat constructor
	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "0" ){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	
	}

	// membuat method (function yg ada didalam class)

	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}

}

class CetakInfoProduk {
	public function cetak( Produk $produk ){
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
		return $str;

	}
}








// property
// membuat object 
$produk1 = new Produk("naruto", "sabar", "sabar 1", "12000");
$produk2 = new Produk("uncarted", "sabar", "sabar 2", "13000");

// method
// mencetak ke layar
echo "komik : " . $produk1->getLabel();
echo "<br>";
echo "game : " . $produk2->getLabel();

echo "<br>";
$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk2);