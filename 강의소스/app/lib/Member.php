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
	
	/** 회원 가입 */
	public function join($data) {
		$this->checkJoinData($data);
		
		$hash = password_hash($data['memPw'], PASSWORD_DEFAULT, ["cost" => 10]);
		
		$cellPhone = "";
		if ($data['cellPhone']) {
			$cellPhone = preg_replace("/[^0-9]/", "", $data['cellPhone']);
		}
		
		$sql = "INSERT INTO member (memId, memPw, memNm, cellPhone)
					VALUES (:memId, :memPw, :memNm, :cellPhone)";
		$stmt = $this->db->prepare($sql);
		$stmt->bindValue(":memId", $data['memId']);
		$stmt->bindValue(":memPw", $hash);
		$stmt->bindValue(":memNm", $data['memNm']);
		$stmt->bindValue(":cellPhone", $cellPhone);
		$result = $stmt->execute(); // true, false 
		if (!$result) { // SQL 실행 실패 -> SQL 오류 
			$errorInfo = $this->db->errorInfo();
			throw new Exception(implode("/", $errorInfo));
		}
		
		$memNo = $this->db->lastInsertId();
		$memberInfo = $this->get($memNo);
		
		return $memberInfo;
	}
	
	/** 회원정보 수정 */
	public function update($data) {
		
	}
	
	/** 로그인 처리 */
	public function login($data) {
		
	}
	
	/** 
	* 회원가입 유효성 검사
	*
	*   1. 필수 항목 체크(memId, memPw, memPwRe, memNm) - O
	*   2. 아이디 체크(자리수 6자리 이상, 알파벳 + 숫자) - O 
	*   3. 중복 아이디 체크 - O
	*   4. 비밀번호 체크(자리수 8자리 이상, 알파벳 + 숫자 + 특수 문자) - O 
	*   5. 비밀번호 확인 - O
	*   6. 휴대전화번호는 필수 X -> 입력된 경우는 휴대전화번호 형식 체크
	*/
	public function checkJoinData($data) {
		
	}
	
	/** 비밀번호 체크 */
	public function checkPassword($memPw, $memPwRe) {
		
	}
	
	/** 휴대전화번호 형식 체크 */
	public function checkCellPhone($cellPhone) {
		
	}
	
	/** 
	* 회원정보 조회 
	*
	* @param $memNo - 정수(is_numeric) - 회원번호, 문자 - 아이디
	* @param $isLogin - 로그인이 되어 있는 경우는 memPw를 정보로 제공 X 
	*/
	public function get($memNo, $isLogin) {
		
	}
	
	/** 
	* 토큰 발급 
	*	 - 로그인 유지 
	*	 - 유효시간(2시간)
	*/
	public function generateToken($memId) {
		
	}
	
	/** 토큰으로 회원정보 조회 */
	public function getByToken($token) {
		
	}
}