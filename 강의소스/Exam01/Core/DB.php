<?php
/**
* DB 연결 클래스 
*
*/
class DB extends PDO {
	public function __construct() {
		try {
			$dsn = "mysql:host=localhost;dbname=php_exam";
			$username = "php_exam";
			$password = "aA!12345";
			parent::__construct($dsn, $username, $password);
		} catch (PDOException $e) {
			echo $e->getMessage();
			exit;
		}
	}
}