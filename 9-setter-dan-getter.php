<?php

/**
 * object type
 */
class Produk {
	// membuat property
	// property public dapat diakses dimana saja
	private $judul,
			$penulis,
			$penerbit,
			$diskon = 0,
			$harga;

	// membuat constructor
	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0 ){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	
	}

	///////////////////////////////////////
	//setter = set
	//getter = get

	public function setJudul($judul){
		$this->judul = $judul;
	}
	public function getJudul(){
		return $this->judul;
	}


	public function setPenulis($penulis){
		$this->penulis = $penulis;
	}
	public function getPenulis(){
		return $this->penulis;
	}


	public function setPenerbit($penerbit){
		$this->penerbit = $penerbit;
	}
	public function getPenerbit(){
		return $this->penerbit;
	}


	public function setDiskon($diskon){
		$this->diskon = $diskon;
	}
	public function getDiskon(){
		return $this->diskon;
	}

	public function setharga($harga){
		$this->harga = $harga;
	}
	public function getHarga(){
		return $this->harga - ( $this->harga * $this->diskon / 100);
	}
	///////////////////////////////////////////////////

	// membuat method (function yg ada didalam class)

	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}

	public function getInfoProduk(){
		$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
		return $str;
	}

}
///////////////////////////////////////////////
/**
 * membuat child class
 */
class komik extends Produk{
	public $jmlHalaman;
	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0){
		parent::__construct($judul, $penulis, $penerbit, $harga);
		$this->jmlHalaman;
	}
	public function getInfoProduk(){
		$str = "komik : ". parent::getInfoProduk() ." - {$this->jmlHalaman}Halaman.";
		return $str;
	}

}
class game extends Produk{	
	public $waktuMain;
	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0){
		parent::__construct($judul, $penulis, $penerbit, $harga);
		$this->waktuMain;
	}

	

	public function getInfoProduk(){
		$str = "game : ". parent::getInfoProduk() ." - {$this->waktuMain} Jam.";
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
$produk1 = new komik("naruto", "sabar", "sabar 1", 12000, 100);
$produk2 = new game("uncarted", "sabar", "sabar 2", 13000, 0);


echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";


$produk2->setDiskon(50);
echo $produk2->getHarga();

echo "<hr>";

$produk2->setJudul("sabar aja");
echo $produk2->getJudul();
