<?php

	$products = require ('../data/products.php');

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exercice POO</title>
</head>
<body>
	
	<h1>Tableau produits :</h1>
	
	<table>
		<tr>
			<td>Id</td>
			<td>Nom</td>
			<td>Prix</td>
			<td>Producteur</td>
			<td>Date récolte</td>
			<td>Marque</td>
		</tr>
		<?php foreach ($products as $product) : ?>

		<tr>
			<td><?= $product->getId() ?></td>
			<td><?= $product->getName() ?></td>
			<td><?= $product->getPrice() ?></td>
			<td><?= (method_exists($product, 'getProductorName') ? $product->getProductorName() : null) ?></td>
			<td><?= (method_exists($product, 'getHarvestedAt') ? $product->getHarvestedAt() : null) ?></td>
			<td><?= (method_exists($product, 'getBrand') ? $product->getBrand() : null) ?></td>
		</tr>

		<?php endforeach ?>
	</table>
	
</body>
</html>