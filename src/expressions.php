<!DOCTYPE html>
<html lang="ko">

<head>
	<meta charset="UTF-8">
	<title>PHP Syntax</title>
</head>

<body>
<a href="/~lcy/phpBase/">뒤로가기</a><br/>
<?php echo "
    # 표현식(expressions) <br/>
    가장 중요할듯 <br/>

    표현식이란 모든 것이 값을 갖는다는 의미이며, PHP에서 사용하는 거의 모든 것이 표현식에 속한다<br/>
    표현식에는 변수와 상수, 함수까지도 포함되며, 제어문이나 명령문도 모두 표현식에 속한다.<br/>

    <br/><br/>
    제어문 : 프로그램의 순차적인 흐름을 제어할때 사용하는 명령문으로 조건문 반복문등이 포함된다.<br/>

    조건문 : 프로그램 내에서 주어진 조건식의 결과에 따라 별도의 명령을 수행하도록 제어하는 명령문입니다.<br/>
    <br/>
    if else (자바스크립트,자바랑 같음)<br/>
    소스 참고)<br/>
"; 
$num01 = 10;
$num02 = 20;
if( $num01 == $num02){
    echo "{$num01}과 {$num02}은 같은 수 입니다.";
}else if( $num01 >= $num02){
    echo "{$num01}이 {$num02}보다 큼";
}else{
    echo "{$num01}이 {$num02}보다 작음";
};
//실행될 명령문이 한줄 뿐이라면 중괄호 생략가능

echo "<br/><br/>
switch문<br/>
소스참고 <br/>
";

$var = "오렌지";
switch ($var) {
    case "귤":
        echo "여기 있는 과일은 귤입니다.";
        break;
    case "사과":
        echo "여기 있는 과일은 사과입니다.";
        break;
    case "바나나":
        echo "여기 있는 과일은 바나나입니다.";
        break;
    default:
        echo "여기 있는 과일은 처음 보는 과일입니다.";
        break;
};


echo"<br/><br/><br/><br/>
-반복문 <br/> 
1. while 문 <br/> 
2. do / while 문 <br/> 
3. for 문 <br/> 
4. foreach 문 <br/> 

소스참고 <br/> 
";

//while문
$i = 0;
while ($i < 5) {
    echo ($i++)."<br>";
    //무한루프 조심해라잉
};

//do~while문
$j = 0;
do { 
    // do ~ while문은 조건식과 상관없이 반드시 한 번은 루프를 실행함
    echo "변수 j의 값은 ".(++$j)."입니다.<br>";
} while ($j > 5);

//for문
for ($i = 0; $i < 5; $i++) {
    echo "{$i}<br>";
}

//foreach
$arr = array(2, 4, 6, 8);
foreach ($arr as $value) {
    echo "변수 \$value의 현재값은 {$value}입니다.<br>";
}
unset($value);
//  $value는 foreach문 내에서만 사용하는 변수이다.
//  따라서 for문이 끝난 뒤에는 unset()함수를 사용하여 해제해 주는것이 좋다.

// 배열의 값 뿐만 아니라 키값도 저장하여 활용 가능함
$arr = array(
    "둘" => 2,
    "넷" => 4,
    "여섯" => 6,
    "여덟" => 8,
);
foreach ($arr as $key => $value) {
    echo "배열 \$arr에서 키값 '{$key}'에 대한 값은 {$value}입니다.<br>";
}
unset($value);


echo "
<br/><br/>
- continue<br/>
continue문은 루프 내에서 사용하여 해당 루프의 나머지 부분을 건너뛰고,<br/>
바로 다음 조건식의 판단으로 넘어가게 합니다.<br/>

다른언어와 다르게 php 에서는 switch 문에서도 continue를 사용 할 수 있고<br/>
switch문을 반복문처럼 사용 할 수 있다.<br/>
";

//4의 배수를 제외하고 출력하기
$exceptNum = 4;
for ($i=0; $i<=100; $i++) {
    if ($i % $exceptNum == 0)
        continue;
    echo "{$i} ";
}

echo "
<br/>
break문<br/><br/>

break 문은 루프 내에서 사용합니다.<br/>
해당 반복문을 완전히 종료시키고, 반복문 다음에 위치한 명령문으로 이동시킵니다.<br/>
즉, 루프 내에서 조건식의 판단 결과에 상관없이, 반복문을 완전히 빠져나가고 싶을 때 사용합니다.<br/>

";

$sum = 0;
$startNum = 1;
$endNum = 100;
$i = $startNum;
while (true) { // 일부러 만든 무한 루프임.
    $sum += $i;
    if ($i == $endNum)
        break;
    $i++;
}
echo "{$startNum}에서부터 {$endNum}까지 더한 값은 {$sum}입니다.";



?>




</body>

</html>