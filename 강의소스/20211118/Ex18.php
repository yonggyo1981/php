<?php

function funcNm($a, $b, $c = 'c', $d = 'd') {
	printf("%s,%s,%s,%s <br>", $a, $b, $c, $d);
}


funcNm('a','b');

function funcNm2($a, ...$b) {
	echo "<pre>";
	print_r($b);
	echo "</pre>";
}

funcNm2(1,2,3,4,5,6,7,8,10);