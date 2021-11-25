<?php

function debug($v) {
	echo "<xmp>";
	print_r($v);
	echo "</xmp>";
}

function msg($message) {
	echo "<script>alert('{$message}');</script>";
}