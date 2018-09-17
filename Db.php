<?php
ini_set("display_errors", "1");

Class Init {
	protected $hostName;
	protected $dbName;
	protected $userName;
	protected $password;

	protected $isDbObjectExist = 0;
	protected $con = NULL;
	
	public $errorMsg;
	public $successMsg;

	function __construct() {
		$this->dbName = 'test';
		$this->hostName = 'localhost';
		$this->userName = 'root';
		$this->password = 'root';
	}
}

class Db extends Init {
	function __construct() {
		parent::__construct();
		$this->createDbCon();
	}

	function createDbCon() {
		$this->con = mysqli_connect($this->hostName,$this->userName,$this->password,$this->dbName);
		if (mysqli_connect_errno()) {
			$this->isDbObjectExist = 0;
			return mysqli_connect_error();
		}
		else {
			$this->isDbObjectExist = 1;
			return "successfully connected to db";
		}
	}
	function getDbCon() {
		return $this->con;
	}
}

?>