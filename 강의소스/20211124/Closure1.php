<?php

function outerFunc($callback) {
	$callback();
}

$innerFunc = function() {
	echo "내부 호출 함수";
};


//outerFunc($innerFunc);

outerFunc(function() {
	echo "내부 호출 함수";
});

