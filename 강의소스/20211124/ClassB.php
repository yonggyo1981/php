<?php

/*final*/ class A {
	public final function methodA() {
		echo "메서드 A";
	}
}

class B extends A {
	const Num1 = 10;
	public function methodA() {
		echo "(재정의)메서드A";
	}
}