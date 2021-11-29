<?php
$handle = fopen("csv_test.csv", "r");
while(($data = fgetcsv($handle, 512)) !== false) {
	echo "<pre>";
	print_r($data);
	echo "</pre>";
}
fclose($handle);