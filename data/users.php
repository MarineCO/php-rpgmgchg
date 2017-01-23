<?php

require_once __DIR__.('/../models/Client.php');

class Users{
	private $users;

	public function __construct() {
		$this->users = [
			["user"=> new Client('client1@gmail.com', 'id 1', date('d-m-Y', time()))],
			["user"=> new Client('client2@gmail.com', 'id 2', date('d-m-Y', time()))]
		];
	}

	public function getUsers() {
		return $this->users;
	}
}	

?>