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
	
	/** 
	* 회원가입 처리 
	*
	* @param Array $data 가입 양식 데이터 
	* @return boolean 
	* @throws Exception - 유효성 검사 실패 
	*/
	public function join($data) {
		/**
		* 1. 필수 항목 체크 
		* 2. 아이디 (자리수 6자리 이상 - strlen(), 알파벳 + 숫자만 허용 - 정규표현식 - preg_match)
		* 3. 아이디의 중복 여부 체크 
		* 4. 비밀번호 (자리수 8자리 이상, 반드시 알파벳, 숫자, 특수문자 1개 이상 포함) + 비밀번호 확인 
		* 5. 휴대전화번호(선택) - 휴대전화번호가 입력된 경우 -> 형식 체크 
		*							   - 입력 데이터의 통일(숫자만 입력)
		*/
		// 필수항목체크 
		$required = [
			'memId' => "아이디를 입력하세요.",
			'memPw' => "비밀번호를 입력하세요.",
			'memPwRe' => "비밀번호를 확인하세요.",
			'memNm' => "회원명을 입력하세요.",
		];
		
		foreach ($required as $field => $msg) {
			if (!isset($data[$field]) || trim($data[$field]) == "") {
				throw new Exception($msg);
			}
		}
		
		// 아이디 체크 
		$memId = $data['memId'];
		if (strlen($memId) < 6) {
			throw new Exception("아이디는 6자리 이상 입력하세요.");
		}
		
		$pattern = "/[^0-9a-z]/i"; // 알파벳, 숫자 이외의 문자가 들어가 있으면 
		if (preg_match($pattern, $memId)) {
			throw new Exception("아이디는 알파벳,숫자만 입력 가능합니다.");
		}
		
		
		// 비밀번호 체크 
		if (isset($data['memPw']) && $data['memPw']) {
			$memPw = $data['memPw'];
			$memPwRe = $data['memPwRe'];
			$this->checkPassword($memPw, $memPwRe);
		}
		
		// 휴대전화번호 체크 
		if (isset($data['cellPhone']) && $data['cellPhone']) {
			$this->checkCellPhone($data['cellPhone']);
		}
	}
	
	/**
	* 비밀번호 체크 
	*
	* @throws Exception 유효성 검사 실패시 
	*/
	public function checkPassword($memPw, $memPwRe) {
		// 8자리 이상 
		if (strlen($memPw) < 8) {
			throw new Exception("비밀번호는 8자리 이상 입력하세요.");
		}
		
		// 복잡성 - 알파벳, 숫자, 특수문자 반드시 1개 이상 포함 
		if (!preg_match("/[a-z]/i", $memPw) || !preg_match("/[0-9]/", $memPw) || !preg_match("/[~!@#$%^&*()]/", $memPw)) {
			throw new Exception("비밀번호는 알파벳, 숫자, 특수문자를 반드시 1개이상 포함하세요.");
		}
		
		// 비밀번호 확인 일치여부 
		if ($memPw != $memPwRe) {
			throw new Exception("비밀번호확인이 일치하지 않습니다.");
		}
	}
	
	/** 
	* 휴대전화번호 유효성 검사 
	*
	* @throws Exception
	*/
	public function checkCellPhone($cellPhone) {
		/**
		* 1. 휴대전화번호 형식 통일화 -> 숫자로만 변경 - preg_replace
		* 2. 휴대전화번호 형식 체크 
		*/
		$cellPhone = preg_replace("/[^0-9]/", "", $cellPhone);
		$pattern = "/^01[016][0-9]{3,4}[0-9]{4}$/";
		if (!preg_match($pattern, $cellPhone)) {
			throw new Exception("휴대전화번호 형식이 아닙니다.");
		}
	}
}	