<?php
$student = [
	'id' => 20211118,
	'name' => '이름',
	'age' => 30,
];

foreach ($student as $key => $value) {
	printf("key : %s, value : %s <br>", $key, $value);
}