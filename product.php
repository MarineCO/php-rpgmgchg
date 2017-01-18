<?php

	class Product {

		private $id;
		private $name;
		private $price;

		public function __construct($strId, $strName, $strPrice) {
			$this->id = $strId;
			$this->name = $strName;
			$this->price = $strPrice;
		}
		
		public function getId() {
			return $this->id; 
		}
		public function setId($strId) {
			$this->id = $strId;
		}

		public function getName() {
			return $this->name;
		}
		public function setName($strName) {
			$this->name = $strName;
		}

		public function getPrice() {
			return $this->price;
		}
		public function setPrice($strPrice) {
			$this->price = $strPrice;
		}


	}

?>