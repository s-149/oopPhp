<?php

/**
 * object type
 */
class Produk {
	// membuat property
	public 	$judul,
			$penulis,
			$penerbit,
			$harga,
			$jmlHalaman,
			$waktuMain;

	// membuat constructor
	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0 ){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlHalamanan = $jmlHalaman;
		$this->waktuMain = $waktuMain;
	
	}

	// membuat method (function yg ada didalam class)

	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}

	public function getInfoProduk(){
		$str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
		return $str;
	}

}
///////////////////////////////////////////////
/**
 * membuat child class
 */
class komik extends Produk{
	public function getInfoProduk(){
		$str = "komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman}Halaman.";
		return $str;
	}

}
class game extends Produk{
	public function getInfoProduk(){
		$str = "game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->waktuMain} Jam.";
		return $str;
	}

}
/////////////////////////////////////////
class CetakInfoProduk {
	public function cetak( Produk $produk ){
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
		return $str;

	}
}


// property
// membuat object 
$produk1 = new komik("naruto", "sabar", "sabar 1", 12000, 100, 0,);
$produk2 = new game("uncarted", "sabar", "sabar 2", 13000, 0, 50,);


echo $produk1->getInfoProduk();