<!DOCTYPE html>
<html lang="ko">

<head>
	<meta charset="UTF-8">
	<title>PHP Syntax</title>
</head>

<body>
<a href="/~lcy/phpBase/">뒤로가기</a><br/>
<?php echo "
    # 다형성(polymorphism) <br/>
    다형성이란 하나의 프로퍼티가 여러가지의 상태를 가질 수 있는 것을 의미 한다. <br/>
    PHP에서는 이런 다형성을 오버로딩과 지연정적바인딩을 통해 구현하고 있다.<br/><br/>



    # 오버로딩(overloading) <br/>

    대부분의 언어에서 오버로딩은 매개변수의 개수와 타입을 달리하여 같은 이름의 메소드를 중복하여 정의하는것을 의미한다. <br/>

    그러나 PHP에서는 프로퍼티나 메소드를 동적으로 '생성한다'는 의미로 오버로딩을 사용한다.<br/><br/>


"; 


    class PropertyOverloading
    {
        private $data = array(); // 오버로딩된 변수가 저장될 배열 생성
        public $declared = 10;   // public으로 선언된 프로퍼티
        private $hidden = 20;    // private로 선언된 프로퍼티
    
        public function __set($name, $value)
        {
            echo "$name 프로퍼티를 {$value}의 값으로 생성합니다!<br/>";
            $this->data[$name] = $value;
        }
        public function __get($name)
        {
            echo "$name 프로퍼티의 값을 읽습니다!<br>";
            if (array_key_exists($name, $this->data)) {
                return $this->data[$name];
            } else {
                return null;
            }
        }
        public function __isset($name)
        {
            echo "$name 프로퍼티가 설정되어 있는지 확인합니다!<br>";
            return isset($this->data[$name]);
        }
        public function __unset($name)
        {
            echo "$name 프로퍼티를 해지합니다!";
            unset($this->data[$name]);
        }
    }
    
    $obj = new PropertyOverloading(); // PropertyOverloading 객체 생성
    
    $obj->prop = 1;              // 동적 프로퍼티 생성
    echo $obj->prop."<br/>";             // 동적 프로퍼티에 접근
    var_dump(isset($obj->prop)); // 동적 프로퍼티로 isset() 함수 호출
    unset($obj->prop);           // 동적 프로퍼티로 unset() 함수 호출
    var_dump(isset($obj->prop)); // 동적 프로퍼티로 isset() 함수 호출
    
    echo $obj->declared; // 선언된 프로퍼티는 오버로딩을 사용하지 않음.
    echo $obj->hidden;   // private로 선언된 프로퍼티는 클래스 외부에서 접근할 수 없으므로, 오버로딩을 사용함.

    

    echo "
    <br/><br/><br/><br/><br/>

    메소드 오버로딩(method overloading)<br/><br/>

    ";

    class MethodOverloading
    {
        public function __call($name, $arguments)
        {
            echo join(", ", $arguments)."에서 접근 불가 메소드를 호출합니다!";
        }
        public static function __callStatic($name, $arguments)
        {
            echo join(", ", $arguments)."에서 접근 불가 메소드를 호출합니다!";
        }
    }
    
    $obj = new MethodOverloading();             // MethodOverloading 객체 생성

    $obj->testMethod("클래스 영역");            // 클래스 영역에서 접근 불가 메소드 호출
    MethodOverloading::testMethod("정적 영역"); // 정적 영역에서 접근 불가 메소드 호출


    echo "
    <br/><br/><br/>
    # 바인딩(binding)<br/><br/>

    바인딩이란 프로그램에서 사용된 구성 요소의 실제 값 또는 프로퍼티를 결정짓는 행위를 의미합니다. <br/>

    예를들어 함수를 호출하는 부분에서 실제 함수가 위치한 메모리를 연결하는 것도 바인딩이다.<br/>

    <br/>
    바인딩은 <br/>
    1. 정적바인딩 : 실행 시간 전에 일어나고, 실행 시간에는 변하지 않은 상태로 유지되는 바인딩<br/><br/>
    2. 동적바인딩 : 실행 시간에 이루어지거나 실행 시간에 변경되는 바인딩, 늦은 바인딩이라고도 불린다.<br/>

    PHP에서는 늦은 정적 바인딩 (late static binding, LSB)를 제공한다.<br/><br/>
    ";


    class A
    {
        public static function className()
        {
            echo __CLASS__;
        }
        public static function printClass()
        {
            self::className();
        }
    }
    class B extends A
    {
        public static function className()
        {
            echo __CLASS__;
        }
    }

    echo B::printClass()."<br/>"; // A 출력

    /*
    클래스 B에서 printClass()메소드를 호출하지만, 이 메소드는 클래스 A에서 정의되므로
    클래스 A를 출력하게 된다.

    하지만 늦은 정적 바인딩을 사용하면, B에서 호출한 printClass()메소드가 현재 클래스 B를 참조하게 할 수 있다.

    이처럼 static 키워드와 범위 지정 연산자(::)를 함께 사용하면 늦은 정적 바인딩을 수행할 수 있습니다.
    */

    class A2
    {
        public static function className()
        {
            echo __CLASS__;
        }
        public static function printClass()
        {
            static::className();
        }
    }
    class B2 extends A2
    {
        public static function className()
        {
            echo __CLASS__;
        }
    }
    echo B2::printClass()."<br/>"; // B2
    $b2 = new B2();
    echo $b2->printClass()."<br/>"; // B2


    echo "
    <br/><br/><br/>
    비정적 메소드 호출에서의 늦은 정적 바인딩
    <br/>
    ";

    class A3
    {
        private function className()
        {
            echo __CLASS__."<br>";
        }
        public function printClass()
        {
            $this->className();
            static::className();
        }
    }
    class B3 extends A3
    {
        // className() 메소드는 클래스 B로 복사되므로,
        // className() 메소드의 유효 범위는 여전히 클래스 A임.
    }
    class C3 extends A3
    {
        private function className()
        {
            // 기존의 className() 메소드가 이 메소드로 대체되므로,
            // className() 메소드의 유효 범위는 이제부터 클래스 C가 됨.
        }
    }
 
    $b3 = new B3();
    $b3->printClass(); // A3
                       // A3 
    $c3 = new C3();
    $c3->printClass(); // A3
                         // Fatal error : Call to private method C::className() from context 'A' 
?>



</body>

</html>