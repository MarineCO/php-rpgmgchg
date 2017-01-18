<?php

	class Client extends User {
		
		public function __construct($string, $string, $string) {
			parent::setEmail($string);
			parent::setId($string);
			parent::setCreatedAt($string);
		}

	}

?>