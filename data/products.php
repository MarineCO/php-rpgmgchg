<?php

require_once __DIR__.('/../models/Vegetable.php');
require_once __DIR__.('/../models/Cloth.php');

class Products {

	private $productsTab;

	public function __construct() {
		$this->productsTab = [
			new Vegetable('Id 1', 'Poivron', '3 €', 'Prod 1', '10-01-2017'),
			new Vegetable('Id 2', 'Salade', '2 €', 'Prod 2', '18-01-2017'),
			new Cloth('Id 3', 'Veste', '50 €', 'Morgan'),
			new Cloth('Id 4', 'Echarpe', '15 €', 'Bonobo'),
			new Cloth('Id 5', 'Robe', '70 €', 'Mango')
		];
	}

	public function getProductsTab() {
		return $this->productsTab;
	}
}	

?>