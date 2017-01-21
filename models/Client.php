<?php

	require ('user.php');
	class Client extends User {

		private $billAmount;
		private $cart = [];

		public function getBillAmount() {
			return $this->billAmount; 
		}
		public function setBillAmount($product) {
			$this->billAmount = $this->billAmount + $product->getPrice();
			
		}

		public function getCart() {
			return $this->cart; 
		}

		public function addProductToCart($product) {
			array_push($this->cart, $product);
		}

		public function buy($product) {
			$this->addProductToCart($product);
			$this->setBillAmount($product);
		}
	}

?>