<?php
$handle = fopen("data.txt", "a");
fwrite($handle, "데이터 입력1....");
fwrite($handle, "데이터 입력2....");
fwrite($handle, "데이터 입력3....");
fclose($handle);

$handle = fopen("data.txt", "a");
fwrite($handle, "데이터 입력1....");
fclose($handle);