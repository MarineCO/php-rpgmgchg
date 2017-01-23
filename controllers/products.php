<?php 

require __DIR__.'/../data/products.php';

class CartController {

	public function home() {
		$cart = new Cart();
		$products = $cart->getProducts();
		$total = $cart->total();

		require __DIR__.'/../views/productTable.php';
		
	}
}
