<?php
$handle = fopen("data2.txt", "r"); 
// feof // - true 파일 끝에 도달 
while(feof($handle) === false) {
	$data = fread($handle, 8192);
	echo $data;
}
fclose($handle);