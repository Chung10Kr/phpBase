<!DOCTYPE html>
<html lang="ko">

<head>
	<meta charset="UTF-8">
	<title>PHP Syntax</title>
</head>

<body>
<a href="/~lcy/phpBase/">뒤로가기</a><br/>
<?php echo "
    # 연산자(operator) <br/>


"; 

$num_01 = 10;
$num_02 = 4;
echo "num01 = 10 <br/> num02 = 4 <br/> "; 
echo "+ 연산자에 의한 결괏값은 ".($num_01 + $num_02)."입니다.<br>"; // 14
echo "- 연산자에 의한 결괏값은 ".($num_01 - $num_02)."입니다.<br>"; // 6
echo "* 연산자에 의한 결괏값은 ".($num_01 * $num_02)."입니다.<br>"; // 40
echo "/ 연산자에 의한 결괏값은 ".($num_01 / $num_02)."입니다.<br>"; // 2.5
echo "% 연산자에 의한 결괏값은 ".($num_01 % $num_02)."입니다.";     // 2

echo "

우선순위와 결합방향은 아니깐 패스 <br/>

2 + 3 * 4 = 24 <br/>
(2 + 3) * 4 = 20  이런거  <br/><br/>

";


$num_01 = 7;
$num_02 = 7;
$num_03 = 7;
echo "   
- + 이런거
"; 
echo "- 연산자에 의한 결괏값은 ".($num_01 = $num_01 - 5)."입니다.<br>"; // 2
echo "-= 연산자에 의한 결괏값은 ".($num_02 -= 5)."입니다.<br>";         // 2
echo "=- 연산자에 의한 결괏값은 ".($num_03 =- 5)."입니다.<br>";             // -5

echo "
<br><br>
- 증감연산자 <br/>
\$var++;<br/>
++\$var<br/>


- 비교 연산자<br/>
== , != 이런거 <br/>

- 타입 비교할때 <br/>

① var_dump(0 < true);           // true <br/>
② var_dump(\"123abc\" == 123);    // true <br/>
③ var_dump(\"123abc\" === 123);   // false <br/><br/>
 
\$arr_01 = array(\"a\" => 10); <br/>
\$arr_02 = array(\"a\" => 5); <br/>
\$arr_03 = array(\"a\" => 5, \"c\" => 7); <br/>
 
④ var_dump(\$arr_01 >= \$arr_02); // true <br/>
⑤ var_dump(\$arr_01 >= \$arr_03); // false <br/>
⑥ var_dump(\"문자열\" < \$arr_01); // true <br/>

- 논리 연산자 <br/>
and or xor && || ! <br/><br/>

- 삼항 연산자 <br/>

조건식 ? 반환값1 : 반환값2  => 자바스크립트랑 동일 <br/>

- 문자열 연산자 <br/>'
문자열 연결시에는 (.) 을 사용 <br/>
echo함수에서는 , 으로 문자열 연결 가능 <br/>
";
$str1 = "안녕";
$str2 = "하세요";
$str3 = $str1.$str2;
echo $str3;
echo "<br/>";
echo $str1,$str2;
echo "<br/>";
echo "<br/>";

echo "-배열 합집합 연산자<br/>
배열은 합집합 연산자 (+)<br/>
";

//$arr_01 = array("1st" => "PHP", "2nd" => "MySQL");
$arr_01 = array( "PHP", "MySQL");
$arr_02 = array("1st" => "HTML", "2nd" => "CSS", "3rd" => "JavaScript");

$result_01 = $arr_01 + $arr_02; // [PHP, MySQL, JavaScript]
var_dump($result_01);
echo "<br/>";
echo "<br/>

- instanceof 연산자<br/>

1. 해당 변수가 어떤 클래스(class)에서 생성된 객체(object)인지를 확인할 때 <br/>
2. 해당 변수가 부모 클래스(parent class)에서 상속받은 클래스인지를 확인할 때<br/>
3. 해당 변수가 클래스의 인스턴스(instance)인지 아닌지를 확인할 때<br/>
4. 해당 변수가 인터페이스(interface)로 구현한 클래스의 객체 인스턴스(object instance)인지 아닌지를 확인할 때<br/>


";

interface Interface01{}
class Class01{}
class Class02 extends Class01 implements Interface01{}

/* 어떤 클래스(class)에서 생성된 객체(object)인지를 확인할 때 */
$var_01 = new Class01();
var_dump ( $var_01 instanceof Class01 );  // true
var_dump ( $var_01 instanceof Class02 );  // false

/* 부모 클래스(parent class)에서 상속받은 클래스인지를 확인할 때 */
$var_02 = new Class02; // Class02 클래스 객체를 생성함.
var_dump($var_02 instanceof Class01);     // true 
var_dump($var_02 instanceof Class02);     // true
 
/* 클래스의 인스턴스(instance)인지 아닌지를 확인할 때 */
$var_03 = new Class01; // Class01 클래스 객체를 생성함.
var_dump(!($var_03 instanceof Class02));  // true

/* 인터페이스(interface)로 구현한 클래스의 객체 인스턴스(object instance)인지 아닌지를 확인할 때 */
$var_04 = new Class02; // Class02 클래스 객체를 생성함.
var_dump($var_04 instanceof Class02);     // true
var_dump($var_04 instanceof Interface01); // true
?>




</body>

</html>