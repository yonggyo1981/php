<?php
include "../_common.php";
try {
	$kakaoLogin = KakaoLogin::getInstance();
	
	$code = Request::get("code");
	$state = Request::get("state");

	$accessToken = $kakaoLogin->getAccessToken($code, $state);
	
	$profile = $kakaoLogin->getProfile($accessToken);
	
} catch (Exception $e) {
	msg($e->getMessage());
	go("../member/login.php");
}