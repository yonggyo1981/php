<?php
$handle = fopen("data3.txt", "r");

$no = 1;
while(feof($handle) === false) {
	$line = fgets($handle);
	echo $no.".".$line."<br>";
	$no++;
}

fclose($handle);