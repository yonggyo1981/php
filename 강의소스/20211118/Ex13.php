<?php
function outerFunc($fruits, $callback) {
	foreach ($fruits as $index => $fruit) {
		$callback($fruit, $index);
	}
}


$fruits = ["apple", "orange", "mango", "banana"];
outerFunc($fruits, function($fruit, $index) {
	printf("%d = %s <br>", $index, $fruit);
});