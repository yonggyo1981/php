<?php
$handle = fopen("data2.txt", "a");
fwrite($handle, "텍스트1....");
fwrite($handle, "텍스트2...");
fclose($handle);