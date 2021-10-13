<!DOCTYPE html>
<html lang="ko">

<head>
	<meta charset="UTF-8">
	<title>PHP Syntax</title>
</head>

<body>
<a href="/~lcy/phpBase/">뒤로가기</a><br/>
<?php echo "
    # 변수(variable) <br/>
    PHP에서는 달러($) 기호를 사용하여 변수를 선언한다. <br/>

    또햔, 변수를 선언할 때 따로 타입을 명시하지 않는다. <br/>
    해당 변수에 대입하는 값에 따라 자동으로 타입이 결졍된다. <br/><br/>

    - 기본제공 타입 <br/>
    1. 불리언(boolean) <br/>
    2. 정수(integer) <br/>
    3. 실수(float) <br/>
    4. 문자열(string) <br/>
    5. 배열(array) <br/>
    6. 객체(object) <br/>
    7. 리소스(resource) <br/>
    8. NULL <br/><br/>
    
    

    ex) 소스확인 <br/>
"; 
$name = "홍길동";
$age = "29";
$nextAge = $age+1;
$message = "{$name}은 올해 {$age}이고 내년에 {$nextAge} 가 된다. <br/><br/>";
$message2 = "\$name은 올해 \$age이고 내년에 \$nextAge 가 된다. <br/><br/>";
echo $message;
echo $message2;
echo "* gettype()은 인수로 전달받은 데이터의 타입을 출력하는 함수<br/> ";
echo gettype($name);

$str = " <br/><br/>
1. 변수의 이름은 영문 대소문자, 숫자, 언더스코어(_)로만 구성됩니다. <br/>
2. 변수의 이름은 숫자와의 구분을 빠르게 하기 위해 숫자로는 시작할 수 없습니다. <br/>
3. 변수의 이름에는 공백이 포함될 수 없습니다. <br/>
4. 변수의 이름으로 PHP에서 미리 정의한 \$this는 사용할 수 없습니다. <br/>
5. 변수의 이름은 대소문자를 구분합니다; <br/><br/>

* PHP에서는 반드시 변수의 선언과 동시에 그 값을 초기화할 필요가 없습니다.
";
echo $str;

$str = "<br/><br/>
지역변수 : 함수 내부에서 선언된 변수는 오직 함수 내부에서만 접근 가능, 함수의 호출이 종료되면 메모리에서 제거됨
";
echo $str;

$str2 = "<br/><br/>
전역변수 : 함수 밖에서 선언된 변수는 함수 밖에서만 접근 가능, 내부에서 접근하고자 하면 global 키워드 사용 필요<br/>

PHP는 모든 전역 변수를 \$GLOBALS 배열에 저장합니다.<br/>
이 배열에 인덱스로 변수의 이름을 사용하면, 해당 전역 변수의 값에 접근할 수 있습니다.<br/>

슈퍼글로벌도 존재 -> 추후에 더 공부하기
<br/>
ex) <br/>
";
echo $str2;

$var = 10;			// 전역 변수로 선언함
$var2 = 20;			// 전역 변수로 선언함
function varFunc()
{
    echo "함수 내에서 호출한 전역 변수 var의 값은 {$var}입니다.<br>";
    global $var;	// 함수 내에서 사용할 전역 변수를 명시함
    echo "함수 내에서 호출한 전역 변수 var의 값은 {$var}입니다.<br>";
    echo "\$GLOBALS사용 {$GLOBALS['var2']} <br/>";
}
varFunc();
echo "함수 밖에서 호출한 전역 변수 var의 값은 {$var}입니다.";


$str = "
<br/><br/>
정적변수 : 함수 내부에서 static 키워드로 선언한 변수를 의미
함수 내부에서 선언된 정적 변수는 함수의 호출이 종료되더라도 메모리상에서 사라지지 않음 <br/>
하지만 지역 변수처럼 해당 함수 내부에서만 접근 가능 <br/>
";

echo $str;
function counter() {
    static $count = 0;
    echo "함수 내부에서 호출한 static 변수 count의 값은 {$count}입니다.<br>";
    $count++;
}
counter();
counter();
counter();
echo "함수 외부에서 호출한 static 변수 count의 값은 {$count}입니다.<br>";
?>




</body>

</html>