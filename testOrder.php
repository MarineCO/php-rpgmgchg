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
	</table>

</body>
</html>