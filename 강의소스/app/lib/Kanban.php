<?php 
/**
* 작업 추가, 수정, 삭제, 조회 
*
*/
class Kanban {
	private $db;
	private static $instance;
	
	private function __construct() {
		$this->db = DB::getInstance();
	}
	
	public static function getInstance() {
		if (!self::$instance) {
			self::$instance = new Kanban();
		}
		
		return self::$instance;
	}
}