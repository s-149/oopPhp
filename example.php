<?php

interface InfoProduk{
	public function getInfoProduk();
}

abstract class Produk{
	public $judul, $penulis, $penerbit, $harga;

	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit =  "penerbit", $harga = "harga"){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}

	abstract public function getInfo();
}

class Komik extends Produk implements InfoProduk{
	public $jmlHalaman;

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "harga", $jmlHalaman = "halaman"){
	parent:: __construct( $judul, $penulis, $penerbit, $harga);
	$this->jmlHalaman = $jmlHalaman;
	}
	public function getInfo(){
		return "{$this->judul}, {$this->penulis}, {$this->penerbit}, {$this->harga}";
	}
	public function getInfoProduk(){
		return "{$this->getInfo()}" . ", {$this->jmlHalaman}";
	}
}

$komik1 = new Komik();

echo $komik1->getInfoProduk();



















