<?php

/**
 * object type
 */

interface InfoProduk{
	public function getInfoProduk();
}
abstract class Produk {
	// membuat property
	// property public dapat diakses dimana saja
	protected $judul,
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

	abstract public function getInfo();


}
///////////////////////////////////////////////
/**
 * membuat child class
 */
class komik extends Produk implements InfoProduk{
	public $jmlHalaman;
	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0){
		parent::__construct($judul, $penulis, $penerbit, $harga);
		$this->jmlHalaman;
	}
	public function getInfo(){
		$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
		return $str;
	}
	public function getInfoProduk(){
		$str = "komik : " . $this->getInfo() . " {$this->jmlHalaman} Halaman.";
		return $str;
	}

}
class game extends Produk implements InfoProduk{	
	public $waktuMain;
	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0){
		parent::__construct($judul, $penulis, $penerbit, $harga);
		$this->waktuMain;
	}
	public function getInfo(){
		$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
		return $str;
	}
	public function getInfoProduk(){
		$str = "game : ". $this->getInfo() ." - {$this->waktuMain} Jam.";
		return $str;
	}

}
/////////////////////////////////////////
class CetakInfoProduk {
	public $daftarProduk = array();

	public function tambahProduk( Produk $produk){
		$this->daftarProduk[] = $produk;
	}
	public function cetak(){
		$str = "DAFTAR PRODUK : <br>";
		foreach ($this->daftarProduk as $p) {
			$str.= "- {$p->getInfoProduk()} <br>";
		}
		return $str;

	}
}


// property
// membuat object 
$produk1 = new komik("naruto", "sabar", "sabar 1", 12000, 100);
$produk2 = new game("uncarted", "sabar", "sabar 2", 13000, 0);


$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);

echo $cetakProduk->cetak();