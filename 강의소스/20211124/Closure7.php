<?php
class A {
	public $numA = 10;
	public function method($callback) {
		$callback = $callback->bindTo($this, __CLASS__);
		$callback();
	}
}

$a = new A();
$a->method(function() {
	echo $this->numA;
});
