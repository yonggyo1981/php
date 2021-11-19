<?php
try {
	$dsn = "mysql:host=localhost;dbname=php_exam";
	$username ="php_exam";
	$password = "aA!12345";
	$db = new PDO($dsn, $username, $password);
	
	$sql = "INSERT INTO member (memId, memPw, memNm) 
					VALUES('abcde', '12345', '이름')";
	$affectedRows = $db->exec($sql);
	echo $affectedRows;
} catch (PDOException $e) {
	echo $e->getMessage();
}