<?php

	require_once ('product.php');

	class Cloth extends Product {
		
		private $brand;

		public function __construct($strId, $strName, $strPrice, $Brand) {
			$this->brand = $Brand;
			parent::__construct($strId, $strName, $strPrice);
		}

		public function getBrand() {
			return $this->brand; 
		}
		public function setBrand($Brand) {
			$this->brand = $Brand;
		}

		public function try() {
			
		}
	}

?>