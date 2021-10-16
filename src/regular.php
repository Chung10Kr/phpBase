<!DOCTYPE html>
<html lang="ko">

<head>
	<meta charset="UTF-8">
	<title>PHP Syntax</title>
</head>

<body>
<a href="/~lcy/phpBase/">뒤로가기</a><br/>
<?php echo "
    # 정규표현식(regular expression) <br/>
    
    정규표현식은 문자열에서 특정한 규칙을 가지는 문자열의 집합을 찾아내기 위한 검색 패턴<br/>

    PHP에서는 2가지의 정규 표현식을 지원한다.<br/>
    1. POSIX : 배우기 쉽고 실행 속도가 빠르다. <br/>
    2. PCRE(Perl-Compatible Regular Expression) : POSIX을 확장하였기에 더 강력하고 유연하게 동작한다.<br/>

    여기서는 POSIX 표준 정규 표현식을 살펴본다. <br/>


    - 정규표현식 리터럴   <br/>
    /검색패턴/플래그  <br/>
    정규표현식 리터럴은 슬래시로 시작하여 슬래시로 끝난다.<br/>
    또한 필요에 따라 플래그를 추가하여 기본검색설정을 변경할 수도 있다. <br/>
   
    -preg_match() <br/>
    해당 문자열에서 전달받은 정규 표현식과 일치하는 패턴을 검색한다. <br/>
    이 함수는 일치하는 패턴이 존재하면 1을 반환하고, 존재하지 않으면 0을 반환 <br/>
"; 
    $subject = "간장 공장 공장장은 강 공장장이고, 된장 공장 공장장은 장 공장장이다.";
    
    if (preg_match('/공장/', $subject)) {
        echo "해당 문자열에서 '공장'을 발견했습니다.<br>";
    } else {
        echo "해당 문자열에서 '공장'을 발견하지 못했습니다.<br>";
    };

?>
<img src = "../img/img05.png" style="width:400px; height:400px">

<?php
    $subject = "bcabcAB";
    // 기본 설정으로 검색 패턴을 비교할 때 대소문자를 구분함.
    echo preg_match_all('/AB/', $subject, $matches_01);      // "AB"
    // 검색 패턴을 비교할 때 대소문자를 구분하지 않도록 설정함.
    echo preg_match_all('/AB/i', $subject, $matches_02); // "ab", "AB"
?>

<img src = "../img/img06.png" style="width:400px; height:700px">

<?php

    echo "
    <br/><br/>
    /.ap/         // 문자열 \"ap\" 앞에 임의의 한 문자가 등장하는 문자열 : aap, bap, cap, @ap, #ap, ...  <br/>
    /a?b/         // b 앞에 a가 0번 또는 1번 등장하는 문자열 : b, ab  <br/>
    /a*b/         // b 앞에 a가 0번 이상 등장하는 문자열 : b, ab, aab, aaab, ...  <br/>
    /a+b/         // b 앞에 a가 1번 이상 등장하는 문자열 : ab, aab, aaab, aaaab, ...   <br/>
    /a{2,4}b/     // b 앞에 a가 2번 이상 4번 이하 등장하는 문자열 : aab, aaab, aaaab  <br/>
    /a{2,}b/      // b 앞에 a가 2번 이상 등장하는 문자열 : aab, aaab, aaaab, aaaaab, ...  <br/>
    /^abc/        // abc로 시작하는 문자열 : abc, abcd, abcdef, ...  <br/>
    /abc$/        // abc로 끝나는 문자열 : abc, zabc, xyzabc, ...  <br/>
    /abc|def|ghi/ // abc, def 또는 ghi 중 하나의 문자열  <br/>
    
    ";

    $subject = "abcdef defabc";
    
    // 단어가 문자열 "abc"로 시작하는 경우를 검색하여, 해당 부분 문자열을 'ABC'로 대체함.
    $match_01 = preg_replace('/^abc/', 'ABC',$subject);
    echo $match_01."<br/>";
    // 단어가 문자열 "abc"로 끝나는 경우를 검색하여, 해당 부분 문자열을 'ABC'로 대체함.
    $match_02 = preg_replace('/abc$/', 'ABC', $subject);
    echo $match_02."<br/>";

    $subject = "ABCdefGHIjkl";
    // 문자열 'abc' 또는 'def' 또는 'jkl'만을 검색함.
    // 즉, 위의 세 문자열 중 어느 하나에만 일치해도 검색됨.
    echo preg_match_all('/abc|def|jkl/', $subject, $match)."<br/>";


    echo "
    - 문자 클래스(character class) <br/>
    /[0-3]/        // 0부터 3까지의 숫자에 해당하는 한 문자 <br/>
    /[a-z]/        // 영문 소문자에 해당하는 한 문자   <br/>
    /[0-9a-zA-Z]/  // 숫자 또는 영문 대소문자에 해당하는 한 문자  <br/>
    ";

    $subject = "@ap";

    echo preg_match("/.ap/", $subject, $match_01)."<br/>";        // "ap" 문자열 앞에 임의의 한 문자가 나타나는 경우를 검색함.
    echo preg_match("/[a-zA-Z]ap/", $subject, $match_01)."<br/>"; // "ap" 문자열 앞에 영문자 한 문자가 나타나는 경우를 검색함.


    echo "
    <br/><br/>
    POSIX 문자 클래스<br/>
    앞서 살펴본 문자 클래스 이외에도 POSIX 정규 표현식에서만 사용할 수 있는 문자 클래스가 존재합니다.<br/>
    POSIX에서만 사용할 수 있는 문자 클래스는 다음과 같습니다.<br/><br/>
    
    ";
?>
<img src = "../img/img07.png" style="width:400px; height:800px">


<?php

    echo "
    /[[:alpha:]][[:digit:]]/ // 첫 번째 문자가 영문자이고, 두 번째 문자가 숫자인 길이가 2인 문자열  </br>
                             // a1, a2, ..., b1, b2, ...  </br>

    <br/><br/>   
    ";

    $subject = "Hello PHP is cool!";
 
    // 첫 번째와 세 번째 문자가 영문 소문자이고, 두 번째 문자가 띄어쓰기인 경우를 검색함.
    echo preg_match_all('/[[:lower:]][[:space:]][[:lower:]]/', $subject, $match_01)."<br/>";
    
    // 첫 번째 문자가 영문 소문자이고, 두 번째 문자가 띄어쓰기, 세 번째 문자가 영문 대문자인 경우를 검색함.
    echo preg_match('/[[:lower:]][[:space:]][[:upper:]]/', $subject, $match_02)."<br/>";


    echo "
    <br/>
    <br/>
    
    /^[[:digit:]]{2}\-[[:digit:]]{4}\-[[:digit:]]{4}/     // 02-1234-5678, ...
    /^[[:digit:]]{2,3}\-[[:digit:]]{3,4}\-[[:digit:]]{4}/ // 02-1234-5678, 031-123-5678, 010-1234-5678, ...

    ";


    $pattern_02 = "/^[[:digit:]]{2,3}\-[[:digit:]]{3,4}\-[[:digit:]]{4}/";
    if (preg_match($pattern_02, $tel, $matches_03)) {
        var_dump($matches_03);
    } else {
        echo "{$tel}은 유효한 형식의 전화번호가 아닙니다.<br>";
    }

    echo "
    <br/>
    정규 표현식에서 '\'문자 바로 뒤에 일반 문자가 나오면, 해당 문자는  특수 문자로 인식됩니다.<br/>
    또한, '\'문자 바로 뒤에 특수 문자가 나오면, 해당 문자는 일반 문자로 인식됩니다.<br/>
    위의 예제에서 사용된 '-'문자는 범위를 나타내는 특수 문자이므로, '\-'는 단순히 전화번호에서 사용되는 '-'기호로 인식됩니다.<br/>
    <br/><br/>
    


    /([0-9a-zA-Z_-]+)@([0-9a-zA-Z_-]+)\.([0-9a-zA-Z_-]+)/      // help@abcd.com, ...<br/>
    /([0-9a-zA-Z_-]+)@([0-9a-zA-Z_-]+)(\.[0-9a-zA-Z_-]+){1,2}/ // help@abcd.com, help@abcd.co.kr, ...<br/>

    위의 예제에서 사용된 다음 정규 표현식의 의미는 숫자나 영문 대소문자, 언더스코어(_) 또는 '-'기호를 포함한 문자가 1번 이상 반복되는 문자열을 의미합니다.<br/><br/>


    PHP에서는 유효한 형식의 이메일 주소인지를 확인하기 위해 정규 표현식뿐만 아니라 filter_var() 함수를 제공<br/>
    filter_var($com, FILTER_VALIDATE_EMAIL); <br/>
    filter_var($co, FILTER_VALIDATE_URL); <br/>

    한글도 가능 <br/>
    /[가-힣]/       <br/>
    ";
 



?>
</body>

</html>