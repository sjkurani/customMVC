<?php
ini_set("display_errors", "1");

require_once('Controller.php');
require_once('View.php');

class Index extends Controller
{
	function __construct()
	{
		parent::__construct();
		$this->index();
	}

	function index() {
		$result = $this->model->getAllData();
		// $this->log->meDebug($result);
		$this->view->displayMe($result,0);
	}
}

$index = new Index;

?>