<?php
$params = [
	'key1' => '값1',
	'key2' => '값2',
];
$handle = curl_init();
curl_setopt($handle, CURLOPT_URL, "http://yonggyo.com/~webclass/20211129/Ex10.php");
curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
curl_setopt($handle, CURLOPT_POST, true); // POST 방식 전송 
curl_setopt($handle, CURLOPT_POSTFIELDS, $params);
$result = curl_exec($handle);
curl_close($handle);

echo $result;