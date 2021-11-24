<?php
setcookie("key1", "value1");
//setcookie("key1", "value1", time() - 1);
//setcookie("key2", "value2", 0, "/~webclass/20211119");

echo "<pre>";
print_r($_COOKIE);
echo "</pre>";