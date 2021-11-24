<?php
$sum = function($num1, $num2) { // Closure 인스턴의 __invoke(....)
	return $num1 + $num2;
};

echo $sum(10, 20);

echo "<pre>";
print_r($sum);
echo "</pre>";


