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
	switch ($in['mode']) {
		case "join": // 회원가입 처리 
			$memberInfo = $member->join($in);
			break;
		case "update" :  // 회원정보 수정
			$result = $member->update($in);
			break;
		case "login" : // 로그인 처리 
			$token = $member->login($in);
			break;
		
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