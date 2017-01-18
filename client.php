<?php

	require ('user.php');

	class Client extends User {
		
		public function __construct($mail, $id, $date) {
			parent::setEmail($mail);
			parent::setId($id);
			parent::setCreatedAt($date);
		}

	}

?>