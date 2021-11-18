<?php

class A {
	public $numA = 10; // 인스턴스 변수
	public static $numB = 20; // 정적 변수 
	
	public function instanceMethod() {
		//echo self::$numB . "<br>"; // 정적 변수 
		//echo self::staticMethod(); // 정적 메서드 
		echo "인스턴스 메서드<br>";
	}
	
	public static function staticMethod() {
		$a = new A();
		$a->numA;
		$a->instanceMethod();
		//$this->instanceMethod();
		//$this->numA
		echo "정적 메서드<br>";
	}
}

echo A::$numB . "<br>";
A::staticMethod();

$a = new A();
echo $a->numA . "<br>";
$a->instanceMethod();