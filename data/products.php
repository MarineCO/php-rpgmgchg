<?php

require_once __DIR__.('/../models/Vegetable.php');
require_once __DIR__.('/../models/Cloth.php');

class Cart {

	private $products;

	public function __construct() {
		$this->products = [
			["product"=> new Vegetable('Id 1', 'Poivron', '3 €', 'Prod 1', '10-01-2017')],
			["product"=> new Vegetable('Id 2', 'Salade', '2 €', 'Prod 2', '18-01-2017')],
			["product"=> new Cloth('Id 3', 'Veste', '50 €', 'Morgan')],
			["product"=> new Cloth('Id 4', 'Echarpe', '15 €', 'Bonobo')],
			["product"=> new Cloth('Id 5', 'Robe', '70 €', 'Mango')]
		];

	}

	public function getProducts() {
		return $this->products;
	}

	public function total() {
		$total = 0;
		foreach ($this->products as $entry) {
			$total += $entry['product']->getPrice();
		}
		return $total;
	}	
}	

?>