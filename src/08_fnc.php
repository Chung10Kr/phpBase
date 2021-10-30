<!DOCTYPE html>
<html lang="ko">

<head>
	<meta charset="UTF-8">
	<title>PHP Syntax</title>
</head>

<body>
<a href="/~lcy/phpBase/">뒤로가기</a><br/>


<?php echo "
    # 함수(function) <br/>
	
	함수란 하나의 특별한 목적의 작업을 수행하도록 설계된 독립적인 블록을 의미 <br/>
	반복적인 작업을 함수로 작성하여 필요할떄마다 호출하면 반복적인 코드의 작성을 피할 수있다.<br/>
	이게 바로 모듈화, 가독성이 좋고, 유지보수도 좋고<br/><br/>
	
	* 함수의 이름은 대소문자를 구분하지 않는다.(그러나 선언한 그대로 호출하는것을 권장)<br/>
	* 함수 오버로딩을 지원하지 않으므로, 이미 선언된 함수를 다시 선언할 수 없다.<br/>

	<br/>
	소스참고)<br/>
	";

	function callName($name){
		echo "{$name}님 안녕하세요?<br/>";
	};
	function nextYear($age){
		return $age + 1;
	};

	callName("바다쓰기");
	$nextYear = nextYear(29);
	echo "당신은 내년에 {$$nextYear}살입니다.<br/>";


	echo "
	
	php7부터 함수의 반환값을 원하는 타입으로 반환받을 수 있도록, 반환값의 타입을 지정 할 수 있다. <br/>

	또한, 타입을 지정할 때 강도도 설정 가능 <br/>
	기본값이 약한 강도에서는 타입이 일치 하지 않으면, 자동타입변환을 통해 명시된 타입으로 변환된 반환값을 반환한다.<br/>
	그러나 강한 강도에서는 반환값의 타입이 일치하지않으면 오류를 발생시킨다. <br/><br/>
	";

	//약한 강도

	function sum($x, $y) : float // 반환값의 타입을 float 타입으로 설정함.
	{
		return $x + $y;
	}
	var_dump(sum(3 , 4)); // float
	var_dump(sum(3 , 4.5)); // float


	echo "<br/>";echo "<br/>";

	include 'stringSample.php';

	echo "<br/>";echo "<br/>";

	echo "
	
	매개변수의 전달방식은 2가지가 있다.<br/>
	1.값 전달 방식<br/>
	2.참조 전달 방식<br/><br/>

	-값전달(passing by value)<br/>
	기본적으로 값전달 방식으로 매개변수가 전달된다.<br/>
	인수를 함수에 전달하면, 새롭게 생성된 매개변수에 전달받은 값이 복사되어 저장된다.<br/>
	이러첨 매개변수에 저장된 값은 전달받은 데이터의 복사본으로, 함수 안에서 변경되어도 함수 밖의 원본데이터에는 영향을 주지 않는다.<br/>
	";

	function increment($para)
	{
		$para++; // $value의 값을 복사하여 increment() 함수에 인수로 전달함.
		echo( $para );
		
	}
	$value = 1;
	increment($value);
	echo("<br/>");
	echo( $value );
	echo("<br/>");
	echo("<br/>");

	echo "
	- 참조전달( passing by reference )  <br/>
	함수 내부에서 함수 밖의 데이터를 조작하기 위해서는 해당 변수를 전역변수로 선언할 수도 있다. <br/>
	그러나 참조 전달을 이용하면 더욱 유연한 코드 작성 가능 <br/><br/>

	참조전달은 인수로 전달받은 값을 복사하는것이 아닌, 전달받은 원본 데이터에 대한 참조 변수를 매개변수에 전달한다. <br/>
	값이 아니라 원본 데이터를 그대로 참조하게 되니,<br/>
	함수 내부에서 값을 변경하면, 함수 밖의 원본 데이터도 같이 바뀌게 된다. <br/>
	참조 전달을 사용하기 위해서는 함수를 선언할 때 매개변수 앞에 '&'기호를 붙여주면 된다.<br/><br/>
	";

	function increment2(&$para) // 인수로 전달되는 값의 원본을 참조함.
	{
		$para++;
		echo "{$para} -2<br/>";
	};
	$value = 1;
	echo "{$value} -1<br/>";
	increment2($value);
	echo "{$value} -3<br/><br/>";

	echo "
	- 디폴트 매개변수 (default parameter)<br/>

	함수를 호출할때 명시된 매개변수의 만큼 인수가 전달되지 않으면, PHP파서는 오류를 발생시킨다.<br/>
	그러나 디폴트 매개변수를 설정하면 함수 호출시 인수의 수를 유연하게 설정 할 수 있다. <br/>

	디폴트 매개변수는 대입연산자 (=)으로 설정 할 수 있다.<br/><br/>

	디퐅르 매개변수의 설정은 매개변수 리스트의 맨 오른쪽 끝 매개변수부터 시작해야 한다.
	";

	function defaultParam($value1 = 0, $value2, $value3 = 0)
	{
		return $value1 + $value2 + $value3;
	}

	echo defaultParam(1, 2, 3); // 6
	echo defaultParam(1, 2);    // 3
	//echo defaultParam(1);     // 오류가 발생함.
	//echo sum();      // 오류가 발생함.


	echo "
	<br/><br/>
	- 가변 길이 인수 목록( variable-length argument list)<br/>

	가변 길이 인수 목록은 함수를 선언할 때 전달받을 인수의 개수를 미리 정하지 않고, 호출할 때마다 유동적으로 인수를 넘기는 기능입니다.<br/>
 
	PHP 5.5 이하에서는 func_num_args(), func_get_arg(), func_get_args() 함수를 사용하여 설정할 수 있었습니다.<br/>
	하지만 PHP 5.6 이상에서는 '...' 토큰을 사용하여 간편하게 설정할 수 있습니다.<br/>
 
	다음 예제는 PHP 5.5 이하에서 가변 길이 인수 목록을 설정하는 예제입니다.<br/>

	
	";
	function sum1()
	{
		$sum = 0;
		foreach(func_get_args() as $n) { // PHP 5.5 이하
			$sum += $n;
		}
		return $sum;
	}
	$result = sum1(1,2,3);
	echo "{$result} PHP5.5이하 <br/>";


	function sum12(...$num) // PHP 5.6 이상
	{
		$sum = 0;
		foreach($num as $n) {
			$sum += $n;
		}
		return $sum;
	}
	$result2 = sum12(1,2,3);
	echo "{$result2} PHP5.6이상 <br/>";





	echo "
	- 조건적인 함수 <br/>
	";
	$makefunc = true;
	//func(); // 이 부분은 func() 함수가 선언되기 전이므로, 함수를 호출할 수 없습니다.
	if($makefunc) {
		function func()
		{
			echo "이제 함수를 사용할 수 있습니다";
		}
		func(); // 이 부분은 func() 함수가 선언되었으므로, 함수를 호출할 수 있습니다.
	}

	echo "
	- 함수 안의 함수 (function within function) <br/>
	PHP는 함수 안의 또다른 함수 선언 가능<br/>
	PHP에서의 모든 함수는 전역함수이므로, 함수 내부에서 선언된 함수라도
	해당 함수 외부에서 호출 가능 <br/><br/>

	
	";

	function out()
	{
		function in()
		{
			echo "이제 함수를 사용할 수 있습니다";
		}
	}
	//in(); // 이 부분은 in() 함수가 선언되기 전이므로, 함수를 호출할 수 없습니다.
	out();
	in();   // 이 부분은 in() 함수가 선언되었으므로, 함수를 호출할 수 있습니다.

	echo "
	<br/><br/><br/>
	-가변 함수( variable function ) <br/>
	가변함수란 변수를 사용하여 함수를 호출하는 것을 의미한다.<br/>
	변수 이름에 괄호를 붙이면, 해당 변수의 값과 같은 이름을 가지는 함수를 호출한다.<br/>

	
	";

	function first()
	{
		echo "first() 함수입니다.<br><br>";
	}
	function second($para)
	{
		echo "second() 함수입니다.<br>";
		echo "함수 호출 시 전달받은 인수의 값은 {$para}입니다.";
	}
	$func = "first";
	$func();    // first() 함수를 호출함.
	$func = "second";
	$func(20);  // second() 함수를 호출함.

?>



</body>

</html>