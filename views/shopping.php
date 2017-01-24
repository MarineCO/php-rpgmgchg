<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exercice POO</title>
</head>
<body>

	<h2>Commander :</h2>

	<form method="GET" action="index.php">
		<div>
			<label for="client">Sélectionner le client</label>
			<select name="client" id="client">
		
				<?php foreach ($usersData as $user) : ?>
		
				<option value="<?= $user->getId() ?>"><?= $user->getId() ?></option>
		
				<?php endforeach ?>
		
			</select>
		</div>
		
		<div>
			<label for="product1">Sélectionner un 1er produit</label>
			<select name="product1" id="product1">
		
				<?php foreach ($productsData as $product) : ?>
		
				<option value="<?= $product->getName() ?>"><?= $product->getName() ?></option>
		
				<?php endforeach ?>
		
			</select>
		</div>
		
		<div>
			<label for="product2">Sélectionner un 2ème produit</label>
			<select name="product2" id="product2">
				
				<?php foreach ($productsData as $product) : ?>
		
				<option value="<?= $product->getName() ?>"><?= $product->getName() ?></option>
		
				<?php endforeach ?>
		
			</select>
		</div>
		
		<div>
			<label for="product3">Sélectionner un 3ème produit</label>
			<select name="product3" id="product3">
				
				<?php foreach ($productsData as $product) : ?>
		
				<option value="<?= $product->getName() ?>"><?= $product->getName() ?></option>
		
				<?php endforeach ?>
		
			</select>
		</div>
		
		<input type="submit" value="Valider">
	</form>

</body>
</html>