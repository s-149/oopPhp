<?php

// static keyword

class Contoh{
	public static $angka = 1;

	public function tampil1(){
		return self::$angka;
	}

}

echo Contoh::$angka;

echo Contoh::tampil1();