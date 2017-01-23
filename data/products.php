<?php

require_once __DIR__.('/../models/Vegetable.php');
require_once __DIR__.('/../models/Cloth.php');

class Products {

	private $vegetable;
	private $cloth;

	public function __construct() {
		$this->products = [
			["vegetable"=> new Vegetable('Id 1', 'Poivron', '3 €', 'Prod 1', '10-01-2017')],
			["vegetable"=> new Vegetable('Id 2', 'Salade', '2 €', 'Prod 2', '18-01-2017')]
		];

		$this->cloth = [
			["cloth"=> new Cloth('Id 3', 'Veste', '50 €', 'Morgan')],
			["cloth"=> new Cloth('Id 4', 'Echarpe', '15 €', 'Bonobo')],
			["cloth"=> new Cloth('Id 5', 'Robe', '70 €', 'Mango')]
		];
	}

	public function getVegetable() {
		return $this->vegetable;
	}

	public function getCloth() {
		return $this->cloth;
	}
}	

?>