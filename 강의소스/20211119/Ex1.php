<?php

class A {
	const NUM1 = 10; // public static final 
	public $num2 = 20;
	
	public function method() {
		
	}
}


echo A::NUM1;
echo "<br>";
$a = new A();
echo $a->num2;