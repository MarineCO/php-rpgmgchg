<?php

class ValidateOrderController {

	private $validateOrder;

	public function __construct($data) {
		$this->validateOrder = $data->getUserChoice();
	}

	public function getValidateOrder() {
		return $this->validateOrder;
	}
	public function setValidateOrder() {
		$currentUser = $this->getValidateOrder();

		require __DIR__.'/../views/validateOrder.php';
	}
}