<?php
class A {
	public $numA = 10;
	public function methodA() {
		echo "메서드 A";
		
	}
}

class B extends A {
	public function methodA() {
		parent::methodA(); 
		echo "메서드 B";
		echo $this->numA;
	}
}

$b = new B();
echo $b->numA . "<br>";
echo $b->methodA();

/*** **/
echo "<br>";
echo $b instanceof B;