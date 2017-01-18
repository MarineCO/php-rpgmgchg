<?php

	require ('product.php');

	class Cloth extends Product {
		
		private $brand;

		public function __construct($Brand) {
			$this->brand = $Brand;
		}

	}

?>