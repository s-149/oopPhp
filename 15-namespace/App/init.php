<?php

spl_autoload_register(function ( $class){
	$class = explode('\\', $class);
	$class = end($class);
	require_once 'Produk/' . $class . '.php';

});

spl_autoload_register(function ( $class){
	$class = explode('\\', $class);
	$class = end($class);
	require_once 'service/' . $class . '.php';

});