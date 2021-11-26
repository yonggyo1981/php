<?php
$handle = fopen("data.txt", "r");

while(feof($handle) === false) {
	$data = fread($handle, 8192);
	echo $data;
}

fclose($handle);