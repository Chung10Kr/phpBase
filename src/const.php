<!DOCTYPE html>
<html lang="ko">

<head>
	<meta charset="UTF-8">
	<title>PHP Syntax</title>
</head>

<body>
<a href="/~lcy/phpBase/">뒤로가기</a><br/>
<?php echo "
    # 상수(constant) <br/>
    상수란 변수와 마찬가지로 데이터를 저장할 수 있는 메모리 공간을 의미한다. <br/>
    하지만 상수는 선언되면, 스크립트가 실행되는 동안 그 데이터를 변경한거나 해제 할 수 없다. <br/><br/>

    define()함수<br/>
    PHP에서는 define()함수를 사용하여 상수를 선언한다. <br/>

    define( 상수이름, 상숫값, 대소문자구분여부)<br/>

    ex) 소스확인 <br/>
"; 
define( "NAME" , "바다쓰기<br/>" );
define( "CITY" , "인천<br/>" , true );
echo NAME;
echo CITY;
echo city;


echo "
마법상수(magic constants) <br/>
php는 미리 정의된 상수 이외에도 어디서 사용하느냐에 따라 용도가 변경되는 8개의 <br/>
마법 상수를 제공한다. -> 대소문자를 구분하지 않는다.
";

function magicCons(){
    echo "<br/>";
    echo __LINE__;	//파일의 현재 줄 번호를 반환함.
    echo "<br/>";
    echo __FILE__;	//파일의 전체 경로와 이름을 반환함. include 내부에서 사용할 경우 include된 파일명을 반환함.
    echo "<br/>";
    echo __DIR__;	//파일의 디렉터리를 반환함. 포함한 파일 안에서 사용할 경우 포함된 파일의 디렉터리를 반환함. dirname(__FILE__) //과 같은 결과를 반환함.
    echo "<br/>";
    echo __FUNCTION__;	//함수의 이름을 반환함.
    echo "<br/>";
    echo __CLASS__;	//클래스의 이름을 반환함. 클래스 이름은 대소문자를 구분함.
    echo "<br/>";
    echo __TRAIT__;	//트레이트(trait)의 이름을 반환함. //트레이트의 이름은 트레이트를 선언한 네임스페이스를 포함함.
    echo "<br/>";
    echo __METHOD__;	//클래스의 메소드 이름을 반환함.
    echo "<br/>";
    echo __NAMESPACE__;	//현재 네임스페이스의 이름을 반환함.
    echo "<br/>";
}

magicCons();


?>




</body>

</html>