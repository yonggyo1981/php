<?php
include "traits/traitA.php";
include "traits/traitB.php";

class ClassA {
	//use traitA, traitB;
	use traitA;
	use traitB;
}

$classA = new ClassA();
$classA->methodA(); 
echo "<br>";
echo $classA->numA;
echo "<br>";
$classA->methodB();