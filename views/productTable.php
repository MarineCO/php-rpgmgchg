<!DOCTYPE html>
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

		<?php foreach ($vegetable as $entry) : ?>
		<tr>
			<td><?= $entry['vegetable']->getId() ?></td>
			<td><?= $entry['vegetable']->getName() ?></td>
			<td><?= $entry['vegetable']->getPrice() ?></td>
			<td><?= $entry['vegetable']->getProductorName() ?></td>
			<td><?= $entry['vegetable']->getHarvestedAt() ?></td>
			<td><?= (method_exists($entry, 'getBrand') ? $entry['vegetable']->getBrand() : null); ?></td>
		</tr>

		<?php endforeach; ?>

		<?php foreach ($cloth as $entry) : ?>

		<tr>
			<td><?= $entry['cloth']->getId() ?></td>
			<td><?= $entry['cloth']->getName() ?></td>
			<td><?= $entry['cloth']->getPrice() ?></td>
			<td><?= (method_exists($entry, 'getProductorName') ? $entry['cloth']->getProductorName() : null); ?></td>
			<td><?= (method_exists($entry, 'getHarvestedAt') ? $entry['cloth']->getHarvestedAt() : null); ?></td>
			<td><?= $entry['cloth']->getBrand() ?></td>
		</tr>

		<?php endforeach; ?>
	</table>
	
</body>
</html>