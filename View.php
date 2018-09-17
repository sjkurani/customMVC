<?php
/**
 * View file
 */
require_once("Log.php");
class View extends Log{

	public $log;
	function __construct() {
		$this->log = new Log();
	}

	function displayMe($dataArray, $view = true) {
		if($view) { //Display layout like right bar and left bar.
			echo "Left";
			$this->log->meDebug($dataArray);
			echo "Right";

		}
		else { // Display only content.
			$this->log->meDebug($dataArray);
		}
	}
}

?>