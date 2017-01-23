<?php 

require __DIR__.'/../data/products.php';

class ProductsController {

	public function productTable() {
		$product = new Products();
		$vegetable = $product->getVegetable();
		$cloth = $product->getCloth();

		require __DIR__.'/../views/productTable.php';
	}
}
