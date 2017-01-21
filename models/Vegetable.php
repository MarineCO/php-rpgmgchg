<?php

	require ('Product.php');

	class Vegetable extends Product {

		private $productorName;
		private $harvestedAt;

		public function __construct($strId, $strName, $strPrice, $Productor, $Harvested) {
			$this->productorName = $Productor;
			$this->harvestedAt = $Harvested;
			parent::__construct($strId, $strName, $strPrice);
		}

		public function getProductorName() {
			return $this->productorName; 
		}
		public function setProductorName($Productor) {
			$this->productorName = $Productor;
		}

		public function getHarvestedAt() {
			return $this->harvestedAt; 
		}
		public function setHarvestedAt($Harvested) {
			$this->harvestedAt = $Harvested;
		}

		public function isFresh() {

			$dateNow = time();
			//tps courant - 1 jour (=24h)
			$soFresh = time() - (strtotime('-1 day'));

			if ($dateNow - strtotime($harvestedAt) < $soFresh) {
				return true;
			} else {
				return false;
			}

		}

	}

?>