<?php

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