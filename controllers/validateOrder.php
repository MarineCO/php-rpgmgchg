<?php

	$users = require_once __DIR__.('/../data/users.php');
	$products = require_once __DIR__.('/../data/products.php');

	/* une méthode pour identifier le client */

		// 1.récup info du client qui a commandé

	$idClient = $_GET['client'];
	var_dump($idClient);

		// 2. Identifier le client parmi les clients

	function identifClient($users, $idClient) {

		foreach ($users as $user) {
			if ($user->getId() === $idClient) {
				return $user;
			}
		}
	}

	$clientChoisi = identifClient($users,$idClient);
	var_dump($clientChoisi);

	/* une méthode pour identifier les produits */

	// $produitsCommandés = [$_GET['product1'], $_GET['product2'], $_GET['product3']];
	// var_dump($produitsCommandés);


	require __DIR__.('/../views/validateOrder.php');