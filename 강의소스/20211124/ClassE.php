<?php

class A {
	/** 인스턴스를 변수로써 출력 하면 자동 호출 */
	public function __toString() {
		return "A 인스턴스";
	}
	
	public function __invoke($num1, $num2) {
		return $num1 + $num2;
	}
}

$a = new A();
//echo $a; // __toString();
echo $a(10, 20); // __invoke()