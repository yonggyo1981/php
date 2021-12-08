<?php
/**
* 소셜 로그인 공통 클래스 
*
*/
abstract class SocialLogin {
	/**
	* 액세스 토큰을 발급받기 위한 code 요청 URL
	*
	*/
	public abstract function getCodeURL();
	
	/**
	* 발급받은 code를 이용해서 API에 접근할 수 있는 access token 발급
	*
	*/ 
	public abstract function getAccessToken($code, $state);
	
	/**
	* 발급받은 AccessToken을 이용해서 회원 정보 조회 API 접근 
	* 회원 정보를 조회 
	*
	*/
	public abstract function getProfile($accessToken);
	
	/**
	* 위변조 방지 State 값 생성
	*
	*/
	protected function getState() {
		list($msec, $sec) = explode(" ", microtime());
		$state = round(($sec + $msec) * 1000);
		
		return $state;
	}
}
