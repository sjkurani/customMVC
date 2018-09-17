<?php
require_once('Model.php');

class Controller {
	public $model;
	function __construct() {
		$this->model = new Model;
		$this->view = new View;
	}
}

?>