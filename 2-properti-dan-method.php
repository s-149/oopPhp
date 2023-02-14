<?php

/**
 * property dan method
 */
class Produk {
	// membuat property
	public 	$judul = "judul",
			$penulis = "penulis",
			$penerbit = "penerbit",
			$harga = "harga";

	// membuat method (function yg ada didalam class)
	// public function sayHello(){
	// 	// mengembalikan nilai
	// 	return "hello word";
	// }

	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}



}
// property
// membuat object 
$produk1 = new Produk();
// menimpa isi dari property yang ada
$produk1->judul = "naruto";
$produk1->penulis = "sabar";
$produk1->penerbit = "sabar 1";
$produk1->harga = "12000";

// menampilkan hasil dari objek
var_dump($produk1);

// mencetak ke layar
echo "<br>";
echo "produk1 : $produk1->judul,$produk1->penulis ";

// method
// mencetak ke layar
echo "<br>";
// echo $produk1->sayHello();
 echo $produk1->getLabel();