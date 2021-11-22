<?php 
/**
* 작업 추가, 수정, 삭제, 조회 
*
*/
class Kanban {
	private $db;
	private static $instance;
	
	/** 필수 입력항목 */
	private $required = [
		'memNo' => "회원만 사용가능한 서비스 입니다.",
		'status' => "작업 구분을 선택하세요.",
		'subject' => "작업명을 입력하세요.",
		'content' => "작업내용을 입력하세요.",
	];
	
	private function __construct() {
		$this->db = DB::getInstance();
	}
	
	public static function getInstance() {
		if (!self::$instance) {
			self::$instance = new Kanban();
		}
		
		return self::$instance;
	}
	
	/** 작업 추가 */
	public function addWork($data) {
		
	}
	
	/** 작업 수정 */
	public function editWork($data) {
		
	}
	
	/** 작업 삭제 */
	public function deleteWork($idx) {
		
	}
	
	/**
	* 작업목록(회원이 작성한)
	*
	* @param $memNo 회원번호
	* @param $status - ready, progress, done 
	*/
	public function getList($memNo, $status) {
		
	}
	
	/**
	* 작업내용 조회 
	*
	* @param $idx 작업 등록번호 
	*/
	public function get($idx) {
		
	}
	
	/** 데이터 유효성 검사 */
	public function checkData($data) {
		
	}
}