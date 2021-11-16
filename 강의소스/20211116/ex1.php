<?
//$text1 = "문자1";
//echo $text1;

$num1 = 10;
$num2 = 20;
$boolean = true;
$boolean2 = false;

//echo "문자1"."문자2"."문자3";
// 문자열 결합은 마침표 연산자(.)
$text1 = "문자1";
$text2 = "문자2";
$text3 = "문자3";

//echo $text1.$text2.$text3;

echo "출력할 문자는? $text1 $text2 $text3<br>";
echo "출력할 문자는? {$text1} {$text2} {$text3}<br>";
echo '출력할 문자는? $text1 $text2 $text<br>';
echo '출력할 문자는? ' . $text1 . ' ' . $text2 . ' ' .$text3 . '<br>';


$text4 = <<<EOD
	안녕하세요.<br>
    반값습니다.
	$text1 
	{$text2}
EOD;
echo $text4;
?>