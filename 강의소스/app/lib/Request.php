<?php

class Request {
	/**
	* 요청 데이터 조회(GET, POST, COOKIE)
	*
	*/
	public static function get($key) {
		$key = isset($_REQUEST[$key])?$_REQUEST[$key]:"";
		
		return $key;
	}
}