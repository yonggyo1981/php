<?php 


// 지역 local  // 전역 global 
$num3 = 10;
function sum($num1, $num2) {
	//global $num3;

	//print_r($GLOBALS);
	
	$result = $num1 + $num2 + $GLOBALS['num3'];
	
	return $result;
}

echo sum(10, 20);