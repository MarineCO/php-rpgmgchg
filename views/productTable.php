<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exercice POO</title>
</head>
<body>
	
	<h2>Tableau produits :</h2>
	
	<table>
		<tr>
			<td>Id</td>
			<td>Nom</td>
			<td>Prix</td>
			<td>Producteur</td>
			<td>Date récolte</td>
			<td>Marque</td>
		</tr>

		<?php foreach ($productsData as $entry) : ?>
		<tr>
			<td><?= $entry->getId() ?></td>
			<td><?= $entry->getName() ?></td>
			<td><?= $entry->getPrice() ?></td>
			<td><?= (method_exists($entry, 'getProductorName') ? $entry->getProductorName() : null); ?></td>
			<td><?= (method_exists($entry, 'getHarvestedAt') ? $entry->getHarvestedAt() : null); ?></td>
			<td><?= (method_exists($entry, 'getBrand') ? $entry->getBrand() : null); ?></td>
		</tr>

		<?php endforeach; ?>
	</table>
	
</body>
</html>