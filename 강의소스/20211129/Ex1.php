<?php
$handle = fopen("data.txt", "w");
fwrite($handle, "텍스트... 텍스트.... 텍스트...");
fclose($handle);


$handle = fopen("data.txt", "w");
fwrite($handle, "텍스트...");
fclose($handle);