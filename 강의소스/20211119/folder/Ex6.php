<?php 
include "../Ex5.php"; // 상대 경로 
include __DIR__ . "/../Ex5.php"; // 절대 경로

echo "<h1>".__DIR__."</h1>";
echo "<h1>".__FILE__."</h1>";