<?php 

class A {
	protected $numA = 10; // private과 동일 -> 상속받은 클래스 내부에서 접근이 가능 
	
	protected function getNumA() {
		return $this->numA;
	}
}

class B extends A {
	public function getNumA2() {
		return parent::getNumA();
	}
}

//$a = new A();
//$a->getNumA();
$b = new B();
echo $b->getNumA2();
/*
$a = new A();
//$a->numA;
echo $a->getNumA();
*/