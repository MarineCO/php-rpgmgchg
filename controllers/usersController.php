<?php 

require __DIR__.('/../data/users.php');

class UsersController {

	public function userTable() {
		$user = new Users();
		$users = $user->getUsers();

		require __DIR__.'/../views/userTable.php';
	}
}