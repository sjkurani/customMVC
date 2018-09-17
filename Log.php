<?php
ini_set("display_errors", "1");

Class Log {
	function meDebug($str, $type = 0) {
		echo "<pre>";
		print_r($str);

		if($type) {
			echo "</pre>";
			exit();
		}
		else {
			echo "</pre>";
		}
	}

	function writeToLog() {
		/*
			Yet to implement.
		*/
	}
}

?>