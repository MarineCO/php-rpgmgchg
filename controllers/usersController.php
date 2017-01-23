<?php 

require __DIR__.('/../views/userTable.php');

class UserController {

	public function userTable() {
		$user = new Users();
		$users = $user->getUsers();

		require __DIR__.'/../views/userTable.php';
	}
}