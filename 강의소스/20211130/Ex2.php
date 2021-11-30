<?php
$handle = curl_init("https://www.naver.com");
curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
$html = curl_exec($handle);
curl_close($handle);

/** 이미지 태그 URL */
/**
	preg_....  -> 정규표현식 지원 함수 
			- preg_match 
			- preg_match_all 
*/
$pattern = "/<img.+src=['\"]?([^'\">]+)['\"]?[^>]*>/im";
preg_match_all($pattern, $html, $matches);
echo "<pre>";
print_r($matches[1]);