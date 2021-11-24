<?php

class A {
	protected function methodA(...$nums) {
		
	}
	/** 없거나 접근 불가능한 인스턴스 메서드에 접근 할 경우 */
	public function __call($name, $arguments) {
		printf("__call :: %s, arguments : %s<br>", $name, implode(",", $arguments));
	}
	
	/** 없거나 접근 불가능한 정적(static)메서드에 접근 할 경우 */
	public static function __callStatic($name, $arguments) {
		printf("__callStatic :: %s, arguments : %s<br>", $name, implode(",", $arguments));
	}
}

$a = new A();
$a->methodA(1,2,3,4,5);

A::staticMethodA('a','b','c','d');