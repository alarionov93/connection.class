<?php
/**
* MySQL Connect
*/
class Mysql_connect {	
	private $host;
	private $usr;
	private $passwd;
	private $database;
	public $conn_id;	// тут описаны свойства класса, вызов без $!!
	function __construct($passwd, $database, $host = 'localhost', $usr = 'root', $conn_id = 0) {
		$this->host;
		$this->usr;
		$this->passwd;
		$this->database;
		$this->conn_id;
		$connection = FALSE;
	}
	public function connect() {
		$error_number = mysql_errno();
		$error_text = mysql_error();
		mysql_query('SET NAMES "utf8";');
		mysql_connect($host, $user, $passwd) || die('Can\'t connect to mysql server ' .mysql_error());
		if (mysql_error() == NULL) {
			$connection++;
			echo("Success! Your connection ID is: ");
			$query = 'SELECT CONNECTION_ID();';
			$result = mysql_query($query);
			$row = mysql_fetch_row($result);
			foreach ($row as $key => $conn_id) {
				echo($conn_id);
			}
		}
	}
	public function closeConn() {
		$close = mysql_close();
		if ($close == TRUE) {
			$connection = FALSE;
			echo $connection;
		} else {
			echo("Error! ".mysql_error());
		}
	}
}
?> 