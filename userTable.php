<?php 

	$users = require ('users.php');

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"/>
	<title>Exercice POO</title>
	<link rel="stylesheet" href="userTable.css"/>
</head>
<body>

	<h1>Tableau clients :</h1>

	<table>
		<tr class="row">
			<td>Email</td>
			<td>Id</td>
			<td>Date</td>
		</tr>

		<?php foreach ($users as $user): ?>
					
		<tr class="row">
			<td><?= $user->getEmail() ?></td>
			<td><?= $user->getId() ?></td>
			<td><?= $user->getCreatedAt() ?></td>
		</tr>
				
		<?php endforeach ?>

	</table>
	
</body>
</html>