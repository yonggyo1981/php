<?php
$fruits = [];
$fruits[0] = "apple";
$fruits[1] = "mango";
$fruits[] = "melon"; // 마지막 배열 끝에 추가 
$fruits['key1'] = "value1";
$fruits[] = "peach";

$fruits['key1'] = "value2";
$fruits[2] = "melon2";
array_push($fruits, "a", "b", "c", "d"); // 추가

unset($fruits['key1']); // 삭제 


echo "<pre>";
print_r($fruits);
echo "</pre>";