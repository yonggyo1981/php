<?php
$num3 = 20;
// global - 전역, local 지역 
function sum($num1, $num2) {
	//global $num3;

	//return $num1 + $num2 + $num3;
	
	return $num1 + $num2 + $GLOBALS['num3'];
}

echo sum(10, 20);