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
		</tr>
		<tr>
			<td><?= $client1->getId() ?></td>
			<td><?= $vegetable1->getName() ?></td>
			<td><?= $vegetable1->getPrice() ?></td>
		</tr>
	</table>
	<h3>Total facture du 1er client : <?= $client1->getBillAmount().' '.'€' ?></h3>

	<h2>Un second utilisateur achète un légume et un vêtement</h2>

	<?php $client2->buy($vegetable2); ?>
	<?php $client2->buy($cloth1); ?>


</body>
</html>