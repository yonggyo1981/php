<?php

class A {
	public $a = 1;
	private $b = 2;
	protected $c = 3;
	public $d = 4;
	
	public function __construct() {
		echo "<h1>생성자</h1>";
		foreach ($this as $key => $value) {
			printf("key = %s, value = %s <br>", $key, $value);
		}
	}
}

$classA = new A();
echo "<h1>클래스 외부</h1>";
foreach($classA as $key => $value) {
	printf("key = %s, value = %s <br>", $key, $value);
}