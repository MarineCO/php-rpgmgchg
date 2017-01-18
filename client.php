<?php

	require ('user.php');

	class Client extends User {

		private $billAmount;
		private $cart = [];

		public function getBillAmount() {
			return $this->billAmount; 
		}
		public function setBillAmount($billAmount) {
			$this->billAmount = $billAmount;
		}

		public function getCart() {
			return $this->cart; 
		}
		public function setCart($cart) {
			$this->cart = $cart;
		}

		public function addProductToCart($product) {
			array_push($this->cart, $product);
		}

		public function buy() {

		}
	}

?>