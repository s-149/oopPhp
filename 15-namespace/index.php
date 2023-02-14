<?php

require_once 'App/init.php';

// $produk1 = new komik("naruto", "sabar", "sabar 1", 12000, 100);
// $produk2 = new game("uncarted", "sabar", "sabar 2", 13000, 0);


// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);

// echo $cetakProduk->cetak();


use App\Produk\User as ProdukUser;
use App\Service\User as ServiceUser;

new ProdukUser();
echo "<hr>";
new ServiceUser();