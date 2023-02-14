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
			$waktuMain,
			$tipe;

	// membuat constructor
	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe = 0 ){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlHalamanan = $jmlHalaman;
		$this->waktuMain = $waktuMain;
		$this->tipe = $tipe;
	
	}

	// membuat method (function yg ada didalam class)

	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}

	public function getInfoLengkap(){
		$str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
		if ($this->tipe == "komik") {
			$str .= "- {$this->jmlHalamanan} Halaman.";
		}
		elseif ($this->type == "game") {
			$str .= "- {$this->waktuMain} Jam.";
		}

		return $str;
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
$produk1 = new Produk("naruto", "sabar", "sabar 1", 12000, 100, 0, "komik");
$produk2 = new Produk("uncarted", "sabar", "sabar 2", 13000, 0, 50, "game");


echo $produk1->getInfoLengkap();