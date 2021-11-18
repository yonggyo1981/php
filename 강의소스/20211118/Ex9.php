<?php
$nums = [
	[0,1,2,3,4],
	[5,6,7,8,9],
	[10,11,12],
];

for ($i = 0; $i < count($nums); $i++) {
	for ($j = 0; $j < count($nums[$i]); $j++) {
		echo $i ."행, ". $j . "열<br>";
	}
}