<?php
/**
* 회원 관련
*	 - 회원가입, 로그인
*
*/
class Member {
	private static $instance;
	private function __construct() {}
	
	public static function getInstance() {
		if (!self::$instance) {
			$instance = new Member();
		}
		
		return $instance;
	}
}	