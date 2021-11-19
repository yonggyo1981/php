<?php

class A {
	const NUM1 = 10; // public static final 
	public $num2 = 20;
	
	public function method() {
		//self::NUM1;
	}
}


echo A::NUM1;
echo "<br>";
$a = new A();
echo $a->num2;