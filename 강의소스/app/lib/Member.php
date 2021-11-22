<?php
/**
* 회원가입, 로그인 처리 
*
*/
class Member {
	private $db; // DB 인스턴스 
	private static $instance;
	
	private function __construct() {
		$this->db = DB::getInstance();
	}
	
	public static function getInstance() {
		if (!self::$instance) {
			self::$instance = new Member();
		}
		
		return self::$instance;
	}
}