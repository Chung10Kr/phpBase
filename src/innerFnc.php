<!DOCTYPE html>
<html lang="ko">

<head>
	<meta charset="UTF-8">
	<title>PHP Syntax</title>
</head>

<body>
<a href="/~lcy/phpBase/">뒤로가기</a><br/>


<?php echo "
    # 내장함수 <br/><br/>
	
	변수관련함수 <br/>
	gettype() : 전달받은 변수의 타입을 반환한다.<br/>
	settype() : 전달받은 변수의 타입을 변경한다.<br/>
	";

	$x = 5;
	echo gettype($x);      // integer
	
	settype($x, "string");
	echo gettype($x);      // string

	echo "
	<br/><br/>
	gettype()함수는 내부적으로 문자열을 비교하기 떄문에 실행 속도가 느림<br/>
	또한, 앞으로 나올 PHP버전에서 반환되는 문자열입 바뀔수도 있으므로,<br/>
	변수가 어떤 타입인지를 검사할떄에는 다음과 같은 함수를 사용하는것이 더 좋다.<br/><br/>



	";
	


?>
<img src="../img/img03.png" style="width:400px; height:400px;"/>


<?php

	echo "
	<br/><br/>
	isset() 함수는 전달받은 변수가 선언되어 있는지를 검사합니다.<br/>
	선언된 변수가 존재하면 true를, 존재하지 않으면 false를 반환합니다.<br/>
 
	unset() 함수는 전달받은 변수를 제거합니다.<br/>
 
	empty() 함수는 전달받은 변수가 비어있는지를 검사합니다.<br/>
	전달받은 변수가 존재하고, 해당 변수가 비어있지 않으면 false를 반환합니다.<br/>
 
	PHP에서는 다음과 같은 값을 가지는 변수를 비어있다고 인식합니다.<br/>
 
    - 정수 0<br/>
    - 실수 0.0<br/>
    - 문자열 \"0\"<br/>
    - 빈 문자열 \"\"<br/>
    - null<br/>
    - false<br/>
    - 빈 배열 array()<br/>
    - 초기화되지 않은 변수<br/>
	
	<br/><br/>

	특정타입으로 변경 <br/>

	intval() 함수는 전달받은 변수에 해당하는 정수를 반환합니다.<br/>
	floatval() 함수와 doubleval()함수는 전달받은 변수에 해당하는 실수를 반환합니다.<br/>
	strval()은 전달받은 변수에 해당하는 문자열을 반환합니다.<br/>
	
	이거 (String) 이렇게도 변환 될텐뎅<br/>
	";

	$x = "123.56789abc";
	echo intval($x);   // 123
	echo ("<br/>");
	echo floatval($x); // 123.56789
	echo ("<br/>");
	echo strval($x);   // 123.56789abc
	echo ("<br/>");

	echo (String) $x;   // 123.56789abc
	echo ("<br/>");


	echo "
	<br/>
	배열 관련 함수는 쉽다.<br/>


	
	";

	$arr = array(1, 5, 7, 3, 3, 1, 2);

	echo "배열 요소의 수는 ".count($arr)."입니다.";  // 7
	echo "배열 요소의 수는 ".sizeof($arr)."입니다."; // 7
	
	$acv = array_count_values($arr);   // 1 : 2번, 5 : 1번, 7 : 1번, 3 : 2번,     
	var_dump( $acv );



	echo "
	<br/>
	- 배열의 탐색 <br/><br/>
	";

	$arr = array(2, 3, 7, 4, 6);

	$element = current($arr);  // 배열의 첫 번째 요소를 가리킴.
	while($element) {          // 배열의 마지막 요소까지
		echo $element;         // 해당 요소의 값을 출력하고,
		$element = next($arr); // 다음 요소를 가리킨 후에 해당 요소를 반환함.
	}                          // 2, 3, 7, 4, 6

	$element = end($arr);      // 배열의 마지막 요소를 가리킴.
	while($element) {          // 배열의 첫 번째 요소까지
		echo $element;         // 해당 요소의 값을 출력하고,
		$element = prev($arr); // 이전 요소를 가리킨 후에 해당 요소를 반환함.
	}                          // 6, 4, 7, 3, 2

	echo "
	<br/>
	- 배열의 정렬 <br/><br/>
	";

	$arr = array(3, 2, 7, 6, 4);
	sort($arr); // 배열 정렬 -> 2, 3, 4, 6, 7

	$arr = array(15, 2, 1, 21, 121);
	sort($arr, SORT_NUMERIC); // 배열 요소를 숫자로 비교함.   -> 1, 2, 15, 21, 121
	sort($arr, SORT_STRING);  // 배열 요소를 문자열로 비교함. -> 1, 121, 15, 2, 21

	$arr = array("apple" => 1000, "banana" => 2000, "orange" => 1500);

	asort($arr); // 요소의 값을 기준으로 배열 정렬 -> apple, orange, banana
	ksort($arr); // 키값을 기준으로 배열 정렬      -> apple, banana, orange

	echo "배열 요소를 내림차순으로 정렬하기 위해서는 rsort(), krsort(), arsort() 함수를 사용해야만 합니다<br/>";
?>

<img src="../img/img04.png" style="width:400px; height:400px;"/>


<?php

	$arr = array(1, 2, 3, 4, 5);
	shuffle($arr);              // 배열 요소를 무작위로 재배치함.

	$arr_01 = array(1, 2, 3, 4, 5);
	$arr_02 = array_reverse($arr_01) // 배열 요소를 역순으로 바꾼 새로운 배열을 반환함.
	// 5,4,3,2,1

?>


<?php

	echo "
	<br/><br/><br/>
	- 문자열 관련 함수 <br/>
	";

	$str = "12345678";
	echo strlen($str); // 8
	/*
	그러나 한글이 포함된 문자열이 전달되면,
	문자열의 길이가 아닌 문자열의 총 바이트 수를 반환한다.
	그래서 정확한 문자열 길이를 반환하기 위해서는 mb_strlen()함수 사용해야함

	* UTF-8 인코딩 방식에서는 영문자는 한 문자당 1바이트, 한글은 한 문자당 3바이트로 표현됩니다.
	*/

	$str = "한글로된문자열";
	
	echo strlen($str);             // 7 * 3 = 21
	echo mb_strlen($str);          // 7 * 3 = 21
	echo mb_strlen($str, "UTF-8"); // 7

	echo strcmp("abc", "ABC");     // 양수
	echo strcasecmp("abc", "ABC"); // 0 strcasecmp는 대소문자를 구분하지 않는다.
	echo strcmp("2", "10");        // 양수
	echo strnatcmp("2", "10");     // 음수




	/*
	strstr(), strchr()는 문자열에서 전달받은 문자열과 처음으로 일치하는 부분을 찾는다.
	일치하는 부분이 존재하면, 처음으로 일치하는 부분을 포함한 이후의 모든 문자를 반환한다.

	strrchr()는 마지막으로 일치하는 부분을 찾음
	stristr() 대소문자를 구분하지 않음
	
	*/

	echo strstr("ABCabcDEFabc", "abc");   // abcDEFabc 처음으로 일치하는 부분 뒤로 쭉
	echo strrchr("ABCabcDEFabcㄹㄹ", "abc");  // abcㄹㄹ 마지막으로 일치하는 부분 뒤로 쭈
	echo stristr("ABCabcDEFabc", "abc");  // ABCabcDEFabc 대소문자 구별 안하고 strstr과 같음


	echo strpos("ABCabcDEFabc", "abc");  // 3 -> 처음으로 일치하는 문자열 위치
	echo strrpos("ABCabcDEFabc", "abc"); // 9 -> 마지막으로 일치하는 문자열 위치

	$str = "Hello, World!";
	echo substr($str, 3);     // 네 번째 문자부터 끝까지 출력
	echo substr($str, -3);    // 끝에서부터 세 글자 출력
	echo substr($str, 1, 5);  // 두 번째 문자부터 다섯 글자 출력
	echo substr($str, 1, -5); // 두 번째 문자부터 뒤에서 여섯 번째 문자까지 출력

	echo strtolower("HELLO, WORLD!"); // 모두 소문자로 바꿈.
	echo strtoupper("hello, world!"); // 모두 대문자로 바꿈.
	echo ucfirst("hello, world!");    // 문자열의 첫 번째 문자만 대문자로 바꿈.
	echo ucwords("hello, world!");    // 각 단어의 첫 번째 문자를 대문자로 바꿈.


	$str = "hello, beautiful, world!";

	$array = explode(',', $str);  // ','를 기준으로 문자열을 나눔.
	echo $array[0];               // hello
	echo $array[1];               // beautiful
	echo $array[2];               // world!

	$str2 = implode('!', $array); // '!'를 기준으로 문자열을 결합함.
	echo $str2;                   // hello! beautiful! world!

	$token = strtok($str2, '!');  // '!'를 기준으로 토큰화
	echo $token;                  // hello
	while($token != ""){          // 문자열이 끝날 때까지
		$token = strtok('!');     // '!'를 기준으로 토근화하고 출력함.
		echo $token;              // beautiful, world
	}


	$str = "hello, world!";
	echo str_replace('o', '*', $str);      // 문자열의 모든 'o'를 '*'로 대체함.
	echo substr_replace($str, '*', 2);     // 세 번째 문자부터 끝까지를 '*'로 대체함.
	echo substr_replace($str, '*', -2);    // 끝에서 두 번째 문자부터 끝까지를 '*'로 대체함.
	echo substr_replace($str, '*', 2, 4);  // 세 번째 문자부터 네 글자를 '*'로 대체함.
	echo substr_replace($str, '*', 2, -4); // 세 번째 문자부터 끝에서 다섯 번째 문자까지를 '*'로 대체함.
	echo substr_replace($str, '*', 2, 0);  // 두 번째 문자 뒤에 '*'을 삽입함.

	$str = "  hello, world!  ";
	echo "'".ltrim($str)."'<br/>"; // 문자열의 처음 부분 공백을 모두 지움. 
	echo "'".rtrim($str)."'<br/>"; // 문자열의 끝부분 공백을 모두 지움.
	echo "'".trim($str)."'";       // 문자열의 처음과 끝부분 공백을 모두 지움.

?>


<?php

	echo "
	<br/><br/>
	-날짜와 시간 관련 함수 <br/><br/>


	";

	echo date("Y/m/d h:i:s")."<br>";

	echo mktime(0, 0, 0, 1, 1, 2000)."<br>";  // 2000년 1월 1일을 나타내는 타임스탬프
	echo mktime()."<br>";                     // 현재 날짜와 시간을 나타내는 타임스탬프
	echo time()."<br>";                              // 현재 날짜와 시간을 나타내는 타임스탬프


	$array = getdate();

	foreach ($array as $key => $value) {
		echo $key." ".$value."<br>";
	};
	//인수를 전달하지 않으면 현재 날짜와 시간을 타임스탬프로 반환한다.

	echo date_default_timezone_get()." : ".date("h:i:s"); // 현재 타임 존과 시간을 받아옴.
	date_default_timezone_set("America/Los_Angeles");     // 타임 존을 변경함.
	echo date_default_timezone_get()." : ".date("h:i:s");

	var_dump(checkdate(1, 31, 2000)); // 유효한 날짜
	var_dump(checkdate(2, 31, 2000)); // 유효하지 않은 날짜
?>


<?php
	echo "
	<br/><br/><br/>
	- 수학 관련 함수<br/>

	";

	echo "1, 5, 7, 3, 2 중 가장 큰 값은 ".max(1, 5, 7, 3, 2)."입니다.";
	echo "1, 5, 7, 3, 2 중 가장 작은 값은 ".min(1, 5, 7, 3, 2)."입니다.";

	echo floor(10.95);  // 10   올림
	echo floor(11.01);  // 11
	echo floor(-10.95); // -11
	echo floor(-11.01); // -12
	
	echo ceil(10.95);   // 11 버림
	echo ceil(11.01);   // 12
	echo ceil(11);      // 11
	echo ceil(-10.95);  // -10
	echo ceil(-11.01);  // -11
	
	echo round(10.49);  // 10 반올림
	echo round(10.5);   // 11
	echo round(-10.5);  // -11
	echo round(-10.51); // -11


	echo "2의 3제곱은 ".pow(2, 3)."입니다.";
	echo "e의 3제곱은 ".exp(3)."입니다.";
	echo "log3은 ".log(3)."입니다.";

	echo "sin3.14는 ".sin(pi()/2)."입니다."; // sin(π/2) == 1
	echo "cos3.14는 ".cos(M_PI)."입니다.";   // cos(π) == -1
	echo "tan3.14는 ".tan(M_PI/4)."입니다."; // tan(π/4) == 1

	echo "-3의 절댓값은 ".abs(-3)."입니다.";
	echo "0부터 ".getrandmax()."까지의 정수를 하나 무작위로 생성합니다 : ".rand();


?>




</body>

</html>