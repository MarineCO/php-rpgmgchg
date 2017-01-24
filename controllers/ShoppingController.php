<?php

$users = require_once __DIR__.'/../data/users.php';
$products = require_once __DIR__.'/../data/products.php';

class ShoppingController {

	private $userChoice;
	private $products;

	public function view() {

		$users = new Users();
		$usersData = $users->getUsers();

		$products = new Products();
		$productsData = $products->getProductsTab();

		require __DIR__.'/../views/shopping.php';
	}

	public function getUserChoice() {
		return $this->userChoice;
	}
	public function setUserChoice() {

	/* méthode pour identifier le client */

		$users = new Users();
		$usersData = $users->getUsers();
		
			// 1.récup info du client qui a commandé

		$idClient = $_GET['client'];
		var_dump($idClient);

			// 2. Identifier le client parmi les clients

		foreach ($usersData as $user) {
			if ($user->getId() === $idClient) {
				return $user;
			}
		}
	}

	public function getProductsChoice() {
		return $this->products;
	}
	public function setProductsChoice() {
		$products = require_once __DIR__.'/../data/products.php';

	/* méthode pour identifier les produits */

		$productsChoice = [$_GET['product1'], $_GET['product2'], $_GET['product3']];
		var_dump($productsChoice);
	}
}



