<?php
$url = "https://www.naver.com";
$handle = curl_init($url);
curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($handle);
curl_close($handle);
?>
<textarea style="width:100%; height: 500px"><?=$result?></textarea>