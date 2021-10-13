<!DOCTYPE html>
<html lang="ko">

<head>
	<meta charset="UTF-8">
	<title>PHP Syntax</title>
</head>

<body>
<a href="/~lcy/phpBase/">뒤로가기</a><br/>
<?php echo "
 
    - 기본제공 타입 <br/>
    1. 불리언(boolean) <br/>
    2. 정수(integer) <br/>
    3. 실수(float) <br/>
    4. 문자열(string) <br/>
    5. 배열(array) <br/>
    6. 객체(object) <br/>
    7. 리소스(resource) <br/>
    8. NULL <br/><br/>

    자료형의 자세한것은 추후에 다시 나올꺼<br/><br/>

    var_dump()는 인수로 전달 받은 변수의 타입과 값을 구조화된 정보로 보여주는 함수 <br/><br/>
    strlen() 함수는 인수로 전달받은 문자열의 길이를 반환하는 함수<br/>
    unset()함수는 인수로 전달받은 변수를 메모리에서 삭제하는 함수<br/><br/>

    - 자동 타입 변환<br/>
    변수를 선언할때 타입을 명시할 필요가 없음 <br/>
    왜냐하면 , PHP에서 변수의 타입은 해당 변수의 대입하는 값에 따라 자동으로 결졍되기 떄문 <br/>
    이렇게 상황에 따라 자동으로 변환되는것을 자동타입변환(type juggling)이라고 한다.<br/><br/>

    - 강제 타입 변환<br/>
    우리 parseInt나 toString처럼 사용자가 변수의 타입을 변환해야 하는 경우가 있다. <br/>
    PHP는 (())을 사용하여 강제타입변환을 할 수 있다.<br/><br/>
    ex)<br/>
    \$var01 = 10;<br/>
    \$var02 = (String) \$var01;<br/>
    <br/>
"; 

echo("<br/>");
$var01 = 10;
echo gettype($var01);
echo(" -> ");
$var02 = (String) $var01;
echo gettype($var02);

echo("<br/>");
$var01 = "2aa0";
echo gettype($var01);
echo(" -> ");
$var02 = (integer) $var01;
echo gettype($var02);


echo "
<br/><br/><br/>
- 가변변수<br/>
php는 변수 이름까지 동적으로 바꿀 수 있다.<br/><br/>

\$PHP = \"HTML\";<br/>
\$HTML = \"CSS\";<br/>
\$CSS = \"JavaScript\";<br/>
\$JavaScript = \"Ajax\";<br/>
\$Ajax = \"PHP\";  <br/><br/>
 
echo \$PHP;       // HTML <br/>
echo \$\$PHP;      // \$HTML -> CSS<br/>
echo \$\$\$PHP;     // \$\$HTML -> \$CSS -> JavaScript<br/>
echo \$\$\$\$PHP;    // \$\$\$HTML -> \$\$CSS -> \$JavaScript -> Ajax<br/>
echo \$\$\$\$\$PHP;   // \$\$\$\$HTML -> \$\$\$CSS -> \$\$JavaScript -> \$Ajax -> PHP<br/>
echo \$\$\$\$\$\$PHP;  // \$\$\$\$\$HTML -> \$\$\$\$CSS -> \$\$\$JavaScript -> \$\$Ajax -> \$PHP -> HTML<br/>
echo \$\$\$\$\$\$\$PHP; // \$\$\$\$\$\$HTML -> \$\$\$\$\$CSS -> \$\$\$\$JavaScript -> \$\$\$Ajax -> \$\$PHP -> \$HTML -> CSS ...<br/>

";




?>


</body>
</html>