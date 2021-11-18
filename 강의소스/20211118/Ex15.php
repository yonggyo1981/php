<?php

class Student {
	public $id;
	public $name;
	
	public function __construct($id = "10000", $name = null) {
		echo "인스턴스 생성!<br>";
		$this->id = $id;
		$this->name = $name;
	}
	
	public function printInfo() {
		printf("%d : %s <br>", $this->id, $this->name);
	}
}

//$s1 = new Student(202111178, "이름1");
$s1 = new Student();
$s1->printInfo();
$s2 = new Student(20211118);
$s2->printInfo();