<?php

class A {
	private $numA = 10;
	
	public function getNumA() {
		return $this->numA;
	}
}

$a = new A();
//echo $a->numA;
echo $a->getNumA();