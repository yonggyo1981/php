<?php
/**
* 카카오 아이디로 로그인 
*
*/
class KakaoLogin extends SocialLogin {
	
	private $clientId = "a49982d3c0b5160ed483b2cba8629050";
	private $clientSecret = "tSmwVxinMEA5dIYPKGbTnaxsRRonIuIi";
	private $redirectURI = "http://yonggyo.com/~webclass/Exam01/member/social_login.php";
	
	private static $instance;
	
	private function __construct() {}
	
	public static function getInstance() {
		if (!self::$instance) {
			$instance = new KakaoLogin();
		}
		
		return $instance;
	}
	
	public function getCodeURL() {
		$state = $this->getState();
		$_SESSION['state'] = $state;
		
		$params = [
			'client_id' => $this->clientId,
			'redirect_uri' => $this->redirectURI,
			'response_type' => 'code',
			'state' => $state,
		];
		
		$codeURL = "https://kauth.kakao.com/oauth/authorize?".http_build_query($params);
		
		return $codeURL;
	}
	
	public function getAccessToken($code, $state) {
		if (!$code || !$state) {
			throw new Exception("잘못된 접근입니다.");
		}
		
		if ($_SESSION['state'] != $state) {
			throw new Exception("데이터가 변조되었습니다.");
		}
		
		$url = "https://kauth.kakao.com/oauth/token";
		$params = [
			'grant_type' => 'authorization_code',
			'client_id' => $this->clientId,
			'redirect_uri' => $this->redirectURI,
			'code' => $code,
			'client_secret' => $this->clientSecret,
		];
		$params = http_build_query($params);
		
		$ch = curl_init();
		curl_setopt_array($ch, [
			CURLOPT_URL => $url,
			CURLOPT_POST => true,
			CURLOPT_POSTFIELDS => $params,
			CURLOPT_RETURNTRANSFER => true,
		]);
		
		$result = curl_exec($ch);
		curl_close($ch);
		
		$result = json_decode($result, true);
		if (!isset($result['access_token'])) {
			throw new Exception("Access Token 발급 실패!");
		}
		
		return $result['access_token'];
	}
	
	public function getProfile($accessToken) {
		$url = "https://kapi.kakao.com/v2/user/me";
		$headers = ["Authorization: Bearer ".$accessToken];
		$ch = curl_init();
		curl_setopt_array($ch, [
			CURLOPT_URL => $url,
			CURLOPT_POST => true,
			CURLOPT_HTTPHEADER => $headers,
			CURLOPT_RETURNTRANSFER => true,
		]);
		
		$result = curl_exec($ch);
		curl_close($ch);
		
		$result = json_decode($result, true);
		return $result;
	}
}