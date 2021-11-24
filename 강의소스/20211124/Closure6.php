<?php
class A {
	public function __invoke($num1, $num2) {
		return $num1 + $num2;
	}
}

$sum = new A();
echo $sum(10, 20);