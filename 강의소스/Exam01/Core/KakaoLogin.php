<?php
/**
* 카카오 아이디로 로그인 
*
*/
class KakaoLogin extends SocialLogin {
	
	private $clientId = "a49982d3c0b5160ed483b2cba8629050";
	private $clientSecret = "tSmwVxinMEA5dIYPKGbTnaxsRRonIuIi";
	
	public function getCodeURL() {
		$params = [
			'client_id' => '',
			'redirect_uri' => '',
			'response_type' => 'code',
			'state' => '',
		];
	}
	
	public function getAccessToken($code, $state) {
		
	}
	
	public function getProfile($accessToken) {
		
	}
}