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
		<?php foreach ($products as $entry) : ?>

		<tr>
			<td><?= $entry['product']->getId() ?></td>
			<td><?= $entry['product']->getName() ?></td>
			<td><?= $entry['product']->getPrice() ?></td>
			<td><?= (method_exists($entry['product'], 'getProductorName') ? $entry['product']->getProductorName() : null) ?></td>
			<td><?= (method_exists($entry['product'], 'getHarvestedAt') ? $entry['product']->getHarvestedAt() : null) ?></td>
			<td><?= (method_exists($entry['product'], 'getBrand') ? $entry['product']->getBrand() : null) ?></td>
		</tr>

		<?php endforeach ?>
	</table>
	
</body>
</html>