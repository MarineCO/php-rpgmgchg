<?php 

require __DIR__.'/../data/products.php';

class ProductsController {

	public function productTable() {
		$products = new Products();
		$productsData = $products->getProductsTab();

		require __DIR__.'/../views/productTable.php';
	}
}
