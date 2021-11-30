<?php

function debug($v) {
	echo "<xmp>";
	print_r($v);
	echo "</xmp>";
}

function msg($message) {
	echo "<script>alert('{$message}');</script>";
}

function go($url, $target = "self") {
	echo "<script>{$target}.location.replace('{$url}');</script>";
}

function reload($target = "self") {
	echo "<script>{$target}.location.reload();</script>";
}