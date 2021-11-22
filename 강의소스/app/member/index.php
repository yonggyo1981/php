<?php
include_once "../common.php";

/**
* 회원가입, 로그인 처리 
*
*/
$success = false;
$returnData = [];
$message = "";
$member = Member::getInstance(); // Member 인스턴스
try {
	switch (Request::get("mode")) {
		case "join": // 회원가입 처리 
			$memberInfo = $member->join($in);
			break;
		case "update" :  // 회원정보 수정
			$result = $member->update($in);
			break;
		case "login" : // 로그인 처리 
			$token = $member->login($in);
			break;
		/** 토큰으로 회원 정보 조회 */
		case "get_member" : 
			$memberData = $member->getByToken($in['token']);
			break;
		default : 
			if (Request::get("origin") != 'front') {
				//header("Location : /app");
				exit;
			}
	}
} catch(Exception $e) {
	$message = $e->getMessage();
}

$result = [
	'success' => $success,
	'data' => $returnData,
	'message' => $message,
];

echo json_encode($result);