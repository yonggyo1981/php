<?php

$fruits = ["apple", "mango", "orange", "peach", "banana"];

for ($i = 0; $i < count($fruits); $i++) {
	echo $fruits[$i] . "<br>";
}

foreach ($fruits as $value) {
	echo $value . "<br>";
}