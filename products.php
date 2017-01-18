<?php

	require_once ('vegetable.php');
	require_once ('cloth.php');

	$vegetable1 = new Vegetable('Id 1', 'Framboise', '3 euros', 'Prod 1', '10-01-2017');
	$vegetable2 = new Vegetable('Id 2', 'Clémentine', '2 euros', 'Prod 2', '18-01-2017');

	$cloth1 = new Cloth('Id 3', 'Veste', '50 euros', 'Morgan');
	$cloth2 = new Cloth('Id 4', 'Echarpe', '15 euros', 'Bonobo');
	$cloth3 = new Cloth('Id 5', 'Robe', '70 euros', 'Mango');

	return [
		1 => $vegetable1,
		2 => $vegetable2,
		3 => $cloth1,
		4 => $cloth2,
		5 => $cloth3
	];	

?>