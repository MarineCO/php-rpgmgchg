<?php

	require 'controllers/products.php';

	if (!isset($_GET['page'])) {
		(new CartController())->home();
	}