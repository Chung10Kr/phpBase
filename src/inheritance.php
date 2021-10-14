<!DOCTYPE html>
<html lang="ko">

<head>
	<meta charset="UTF-8">
	<title>PHP Syntax</title>
</head>

<body>
<a href="/~lcy/phpBase/">뒤로가기</a><br/>
<?php echo "
    # 상속(inheritance) <br/>
    상속이란 기존의 클래스에 기능을 추가하거나 재정의 하는 새로운 클래스를 만드는것을 의미한다.  <br/>

"; 
    class person {
        public $name;
        private $age;
        public static $staticValue = "static";
        // Static은 인스턴스를 생성하지 않아도 접근 가능

        public function __construct($name,$age){
            $this->name=$name;
            $this->age=$age;
        }
        public function callNm(){
            echo "$this->name 일루와. 상위!<br/>";
        }
        public function callAge(){
            echo "$this->name 은 $this->age! 입니다.<br/>";
        }
        public static function staticFnc(){
            echo self::$staticValue."함수 호출했숩다 <br/>";
        }
    }
    class crlee extends person{
        //오버 라이딩
        public function callNm(){
            parent::callNm(); // 
            echo "$this->name 아 빨리 일루와.!<br/>";
            // $this->age 이거는 private이기 때문에 못씀
        }
    }
    $person = new person("person" , 40);
    $person->callNm();
    $crlee = new crlee("crlee" , 30);
    $crlee->callNm();
    $crlee->callAge();

    echo person::$staticValue."<br/>";
    echo person::staticFnc();


    $static2 = new person("abc",10);          // 인스턴스 생성
    echo $static2->staticFnc();          // 호출 가능
    //echo $static2->$staticFnc;       // 접근 불가능
    // . static 키워드로 선언된 정적 프로퍼티는 인스턴스화된 객체에서는 접근할 수 없습니다.
?>



</body>

</html>