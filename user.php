<?php 

	class User {

		private $email = "";
		private $id = "";
		private $createdAt = "";

		function __construct() {
			$this->email;
			$this->id;
			$this->createdAt;
		}

		public function getEmail() {
			return $this->email;
		}
		public function setEmail($string) {
			$this->email = $string;
		}

		public function getId() {
			return $this->email;
		}
		public function setId($string) {
			$this->email = $string;
		}

		public function getCreatedAt() {
			return $this->createdAt;
		}
		public function setCreatedAt($date) {
			$this->createdAt = $date;
		}
	}


?>
