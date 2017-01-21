<?php

	require_once ('models/Vegetable.php');
	require_once ('models/Cloth.php');

	$vegetable1 = new Vegetable('Id 1', 'Poivron', '3 €', 'Prod 1', '10-01-2017');
	$vegetable2 = new Vegetable('Id 2', 'Salade', '2 €', 'Prod 2', '18-01-2017');

	$cloth1 = new Cloth('Id 3', 'Veste', '50 €', 'Morgan');
	$cloth2 = new Cloth('Id 4', 'Echarpe', '15 €', 'Bonobo');
	$cloth3 = new Cloth('Id 5', 'Robe', '70 €', 'Mango');

	return [
		1 => $vegetable1,
		2 => $vegetable2,
		3 => $cloth1,
		4 => $cloth2,
		5 => $cloth3
	];	

?>