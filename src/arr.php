<!DOCTYPE html>
<html lang="ko">

<head>
	<meta charset="UTF-8">
	<title>PHP Syntax</title>
</head>

<body>
<a href="/~lcy/phpBase/">뒤로가기</a><br/>


<?php echo "
    # 배열(array) <br/>
	PHP	에서 배열은 맵으로 이루어진, 순서가 있는 집합을 의미<br/>
	맵은 키와 값으로 이루어짐<br/>
	이때 배열을 구성하는 각각의 맵을 배열 요소(array element)라고 한다.<br/><br/>

	1.1차원배열<br/>
	2.다차원배열<br/>
	3.연관배열<br/><br/>

	1차원 배열<br/>

	\$배열이름 = array(); //선언 <br/>
	\$배열이름[인덱스] //배열 요소 참조, 인덱스는 숫자뿐만아니라 문자로도 사용 가능 <br/>
	\$arr = array();     // 배열 생성 <br/>
	\$arr[0] = \"apple\";  // 배열 요소 추가 <br/>
	\$arr[1] = \"banana\"; // 배열 요소 추가 <br/>
	\$arr[2] = \"orange\"; // 배열 요소 추가 <br/><br/>

	\$배열이름 = array(배열요소1, 배열요소2, ...); // 생성하면서 요소 추가하기 <br/>
"; 

$arr = array("apple", "banana", "orange");  // 배열 생성과 동시에 초기화
echo $arr;
echo "<br/>";
var_dump( $arr );

echo "<br/><br/>

* 배열이 존재하지 않으면, 해당 이름으로 새로운 배열을 만든 후 배열요소를 추가한다.<br/><br/>

* 요소 인덱스도 생략 가능 ,인덱스는 자동 증가<br/>

";

$arr2[] = "apple";  // 배열 인덱스를 생략하여, 순서대로 배열에 추가됨.
$arr2[] = "banana";
$arr2[] = "orange";
var_dump( $arr2 );
echo("<br/>");

$arr3 = array("1","2");
$arr3[] = 3;
echo("<br/>");
var_dump( $arr3 );

echo "
<br/>
코드를 명확하게 하고 오류를 피하기 위해서는 배열을 먼저 선언해주는게 바람직하다. <br/><br/>

<br/><br/>
- 배열의 홀(hole)<br/>
특정 인덱스에만 배열요소를 추가 할 수 있다.<br/>

\$arr = array();<br/>
\$arr[10] = \"banana\" //이런식으로 이러면 0부터 9까지는 요소가 존재하지 않는다 null반환<br/><br/>

* isset()함수는 인수로 전달받은 변수가 초기화되어있는지 확인해줌<br/>
* count()는 배열의 요소의 갯수를 반환하는 함수<br/>

hole은 for문으로 접근할 수 없고 foreach문으로 접근해야함



- 다차원배열<br/>
2차원 이상의 배열<br/>
\$arr = arr(<br/>
	array(),<br/>
	array()<br/>
)<br/>



<br/><br/>
- 연관배열
PHP에서는 숫자뿐만 아니라 문자열도 배열 요소의 인덱스로 사용가능하다.<br/>
만약 정수와 문자열 이외의 다른 타입의 값을 키 값으로 사용하면,<br/>
내부적으로 정수와 문자열로 타입 변환이 이뤄진다.<br/>

소스확인)<br/>
";

$array = array();        // 배열 생성
$array["apple"] = 1000;  // 연관 배열 요소 추가
$array["banana"] = 2000; 
$array["orange"] = 1500;
$array[] = "orange";
$array[1] = "orange";

var_dump($array)

?>




</body>

</html>