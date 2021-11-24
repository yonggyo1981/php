<?php
function outerFunc($num1) {
	return function ($num2) use($num1) { // Closure -> __invoke
		return $num1 + $num2;
	};
}

$func = outerFunc(10);
echo $func(20);