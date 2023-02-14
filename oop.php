<?php

// oop
// 1. class

class Produk{
	// 3. properti 
	// 4. visibility (publiic, protected, private)
	public $kode, $jenis, $qty, $harga;

	// 6. construct ( __construct )
	public function __construct( $kode1 = "kode2", $jenis1 ="jenis2", $qty1 = "qty2", $harga1 = "harga2"){
		$this->kode = $kode1;
		$this->jenis = $jenis1;
		$this->qty = $qty1;
		$this->harga = $harga1;

	}

	// 5. method
	public function InfoProduk(){
		return "{$this->kode}, {$this->jenis}, {$this->qty}, {$this->harga}";
	}



}

// 2. object
$produk1 = new Produk();

//echo $produk1->InfoProduk();


// 7. object type

class Baru{
	public function tampil( $object ){
		return "{$object->InfoProduk()}";
		//return "{$object->kode}";

	}

}

$baru1= new Baru();
//echo $baru1->tampil($produk1);

// inheritance/pewarisan (extends)

/**
 * 
 */
class Komputer extends Produk {
	// 8. overiding 
	public $spek;
	public function __construct( $kode1 = "kode2", $jenis1 ="jenis2", $qty1 = "qty2", $harga1 = "harga2", $spek1 = "spek2"){
	parent:: __construct( $kode1, $jenis1, $qty1, $harga1);
	$this->spek = $spek1;
	}

	public function InfoProduk(){
		return parent::InfoProduk() . ", {$this->spek}";
	}

	// 9. setter
	public function setSpek($a){
		$this->spek = $a;
	}
	// 10. getter
	public function getSpek(){
		return "{$this->spek}";
	}
}
$komputer1 = new Komputer();

//mengisi fungsi setter
$komputer1->setSpek("spek baru");
//echo $komputer1->spek;

//menampilkan fungsi getter
//echo $komputer1->getSpek();


echo $komputer1->InfoProduk();



