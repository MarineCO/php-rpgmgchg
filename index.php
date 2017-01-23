<?php

require 'controllers/productsController.php';
require 'controllers/usersController.php';

if (!isset($_GET['page'])) {
	(new UsersController())->userTable();
	(new ProductsController())->productTable();
}