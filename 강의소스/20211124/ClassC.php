<?php
$c = new class {
	public $numA = 10;
	public $numB = 20;
	
	public function sum() {
		return $this->numA + $this->numB;
	}
};

echo $c->sum();