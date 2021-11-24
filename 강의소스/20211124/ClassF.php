<?php
namespace school;

class A {
	public function __construct() {
		echo "__CLASS__ : " . __CLASS__  ."<br>";
		echo "__LINE__ : " . __LINE__ . "<br>";
		echo "__FILE__ : " . __FILE__ . "<br>";
		echo "__DIR__ : " . __DIR__ . "<br>";
		echo "__METHOD__ : " . __METHOD__ . "<br>";
		echo "A::class : " . A::class . "<br>";
	}
}

$a = new A();
