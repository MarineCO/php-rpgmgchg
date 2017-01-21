<?php

	$users = require ('users.php');
	$products = require ('products.php');

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exercice POO</title>
</head>
<body>

	<h2>Un premier utilisateur achète un des légumes</h2>

	<?php $client1->buy($vegetable1); ?>

	<table>
		<tr>
			<td>Id client</td>
			<td>Produit acheté</td>
			<td>Prix</td>
			<td>Producteur</td>
			<td>Date récolte</td>
		</tr>
		<tr>
			<td><?= $client1->getId() ?></td>
			<td><?= $vegetable1->getName() ?></td>
			<td><?= $vegetable1->getPrice() ?></td>
			<td><?= (method_exists($vegetable1, 'getProductorName') ? $vegetable1->getProductorName() : null) ?></td>
			<td><?= (method_exists($vegetable1, 'getHarvestedAt') ? $vegetable1->getHarvestedAt() : null) ?></td>
		</tr>
	</table>
	<h3>Total facture du 1er client : <?= $client1->getBillAmount().' '.'€' ?></h3>

	<h2>Un second utilisateur achète un légume et un vêtement</h2>

	<?php $client2->buy($vegetable2); ?>
	<?php $client2->buy($cloth1); ?>

	<table>
		<tr>
			<td>Id client</td>
			<td>Produit acheté</td>
			<td>Prix</td>
			<td>Producteur</td>
			<td>Date récolte</td>
			<td>Marque</td>
		</tr>
		<tr>
			<td><?= $client2->getId() ?></td>
			<td><?= $vegetable2->getName() ?></td>
			<td><?= $vegetable2->getPrice() ?></td>
			<td><?= (method_exists($vegetable1, 'getProductorName') ? $vegetable1->getProductorName() : null) ?></td>
			<td><?= (method_exists($vegetable1, 'getHarvestedAt') ? $vegetable1->getHarvestedAt() : null) ?></td>
		</tr>
		<tr>
			<td><?= $client2->getId() ?></td>
			<td><?= $cloth1->getName() ?></td>
			<td><?= $cloth1->getPrice() ?></td>
			<td><?= (method_exists($cloth1, 'getProductorName') ? $cloth1->getProductorName() : null) ?></td>
			<td><?= (method_exists($cloth1, 'getHarvestedAt') ? $cloth1->getHarvestedAt() : null) ?></td>
			<td><?= (method_exists($cloth1, 'getBrand') ? $cloth1->getBrand() : null) ?></td>

		</tr>
	</table>
	
	<h3>Total facture du 2ème client: <?= $client2->getBillAmount().' '.'€' ?></h3>

</body>
</html>