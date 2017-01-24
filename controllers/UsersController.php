<?php 

require __DIR__.('/../data/users.php');

class UsersController {

	public function userTable() {
		$users = new Users();
		$usersData = $users->getUsers();

		require __DIR__.'/../views/userTable.php';
	}
}