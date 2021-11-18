<?php

function outerFunc($callback) {
	$event = "매개변수";
	$callback($event);
}


$callback = function($event) {
	echo "함수를 인수로 호출!!! - ".$event;
};

//outerFunc($callback);


outerFunc(function($event) {
	echo $event;
});