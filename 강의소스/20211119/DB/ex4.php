<?php
try {
	$dsn = "mysql:host=localhost;dbname=php_exam";
	$username = "php_exam";
	$password = "aA!12345";
	$db = new PDO($dsn, $username, $password);
	$sql = "SELECT * FROM member WHERE memId LIKE :memId";
	$stmt = $db->prepare($sql);
	$stmt->bindValue(":memId", "abcde%");
	$result = $stmt->execute();
	if ($result === true) {
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			echo "<pre>";
			print_r($row);
			echo "</pre>";
		}
	}
} catch (PDOException $e) {
	echo $e->getMessage();
}