<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"/>
	<title>Exercice POO</title>
	<link rel="stylesheet" href="userTable.css"/>
</head>
<body>

	<h2>Tableau clients :</h2>

	<table>
		<tr class="row">
			<td>Email</td>
			<td>Id</td>
			<td>Date</td>
		</tr>

		<?php foreach ($usersData as $entry): ?>
					
		<tr class="row">
			<td><?= $entry->getEmail() ?></td>
			<td><?= $entry->getId() ?></td>
			<td><?= $entry->getCreatedAt() ?></td>
		</tr>
				
		<?php endforeach ?>

	</table>
	
</body>
</html>