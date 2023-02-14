<?php

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