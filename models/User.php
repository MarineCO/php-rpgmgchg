<?php 

	class User {

		private $email = "";
		private $id = "";
		private $createdAt = "";

		public function __construct($mail, $id, $date) {
			$this->email = $mail;
			$this->id = $id;
			$this->createdAt = $date;
		}

		public function getEmail() {
			return $this->email;
		}
		public function setEmail($mail) {
			$this->email = $mail;
		}

		public function getId() {
			return $this->id;
		}
		public function setId($id) {
			$this->id = $id;
		}

		public function getCreatedAt() {
			return $this->createdAt;
		}
		public function setCreatedAt($date) {
			$this->createdAt = $date;
		}
	}


?>
