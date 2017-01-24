<?php

require 'controllers/ProductsController.php';
require 'controllers/UsersController.php';

require 'controllers/ShoppingController.php';
require 'controllers/ValidateOrderController.php';

if (!isset($_GET['page'])) {
	(new UsersController())->userTable();
	(new ProductsController())->productTable();
}

if (!isset($_GET['page'])) {
	(new ShoppingController())->view();
}

if (!isset($_GET['page'])) {
	$commande = new ShoppingController();
	$commande->setUserChoice();
	$commande->setProductsChoice();

}
