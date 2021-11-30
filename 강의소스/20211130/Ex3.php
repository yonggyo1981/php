<?php
$url = $_SERVER['REQUEST_SCHEME'] . "://".$_SERVER['HTTP_HOST'] . $_SERVER['CONTEXT_PREFIX'] . "/20211130/Ex4.php";
/** PHP 배열 형태로 전송 */

$params = [
	'key1' => '값1',
	'key2' => '값2',
	'key3' => '값3',
];

$params = http_build_query($params);

//$params = 'key1='.urlencode("값1")."&key2=".urlencode("값2")."&key3=".urlencode("값31");
$headers = [
	'test1: test1',
	'test2: test2',
];
$handle = curl_init();
/**
curl_setopt($handle, CURLOPT_URL, $url);
curl_setopt($handle, CURLOPT_HTTPHEADER, $headers); // 요청 헤더 
curl_setopt($handle, CURLOPT_POST, true);
curl_setopt($handle, CURLOPT_POSTFIELDS, $params);
*/
curl_setopt_array($handle, [
	CURLOPT_URL => $url,
	CURLOPT_HTTPHEADER => $headers,
	CURLOPT_POST => true,
	CURLOPT_POSTFIELDS => $params,
]);
$result = curl_exec($handle);
curl_close($handle);

echo $result;