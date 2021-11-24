<?php
function outerFunc() {
	return function() {
			echo "내부 함수에서 호출";
	};
}

$func = outerFunc();
$func();