<?php
/**
 * Db Connections.
 */

require_once('Db.php');
class Model extends Db
{	
	public $con;
	function __construct()
	{
		$dbObj = new Db;
		/*
			$status = $dbObj->createDbObject();
			echo $status;
			var_dump($dbObj->getDbStatus());
			print_r($dbObj->getCon());
		*/
		$this->con = $dbObj->getDbCon();
	}

	function getAllData() {
		$sql = "select * from test";
		if ($result=mysqli_query($this->con,$sql)) {
			return mysqli_fetch_array($result);
		}
		else {
			return mysqli_error();
		}
	}
}
?>