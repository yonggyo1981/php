<?php
namespace Exam;

include "ClassA.php";
include "ClassB.php";
include "ClassC.php";

use Models\A\ClassA;
use PDO;

$a1 = new ClassA();
echo "<br>";
$a2 = new \Models\B\ClassA();
echo "<br>";
$a3 = new \Models\C\ClassA();
echo "<br>";

try {
	$dsn = "mysql:host=localhost;dbname=kanban";
	$db = new PDO($dsn, "root", "aA!12345");
	
} catch (\PDOException $e) {
	echo $e->getMessage();
}
