<?php
try {
	$dsn = "mysql:host=localhost;dbname=php_exam";
	$username = "php_exam";
	$password = "aA!12345";
	$db = new PDO($dsn, $username, $password);
	$sql = "INSERT INTO member (memId, memPw, memNm)
					VALUES (:memId, :memPw, :memNm)";
	$stmt = $db->prepare($sql);
	$stmt->bindValue(":memId", "abc");
	$stmt->bindValue(":memPw", "def");
	$stmt->bindValue(":memNm", "ghi");
	$result = $stmt->execute();
	echo $result;
} catch (PDOException $e) {
	echo $e->getMessage();
}