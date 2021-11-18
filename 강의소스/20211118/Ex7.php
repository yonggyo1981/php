<?php
$a = 10;
$b = &$a; // $a 변수의 주소값을 $b에 대입 

$b = 20;

printf("a = %d, b = %d <br>", $a, $b);