<?php
try {
	$dsn = "mysql:host=localhost;dbname=php_exam";
	$username = "php_exam";
	$password = "aA!12345";
	$db = new PDO($dsn, $username, $password);
	$sql = "SELECT * FROM member";
	$stmt = $db->query($sql);
	//while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
	//while($row = $stmt->fetch(PDO::FETCH_NUM)) {
	while($row = $stmt->fetch(PDO::FETCH_BOTH)) {
		echo "<pre>";
		print_r($row);
		echo "</pre>";
	}
	
} catch (PDOException $e) {
	echo $e->getMessage();
}