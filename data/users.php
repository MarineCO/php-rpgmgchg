<?php

	require ('models/Client.php');

	$client1 = new Client('client1@gmail.com', 'id 1', date('d-m-Y', time()));
	$client2 = new Client('client2@gmail.com', 'id 2', date('d-m-Y', time()));

	return [
		1 => $client1,
		2 => $client2
	];


?>