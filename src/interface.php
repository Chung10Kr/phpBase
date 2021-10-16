<!DOCTYPE html>
<html lang="ko">

<head>
	<meta charset="UTF-8">
	<title>PHP Syntax</title>
</head>

<body>
<a href="/~lcy/phpBase/">뒤로가기</a><br/>
<?php echo "
    # 추상 메소드(abstract method) <br/>

    추상 메소드란 자식 클래스에서 반드시 오버라이딩해야만 사용할 수 있는 메소드를 의미한다.<br/>

    추상 메소드는 선언부만 존재하며, 구현부는 작성되어 있지 않다.<br/>
    그래서 구현부를 자식클래스에서 오버라이딩하여 사용하는 것이다. <br/><br/>

    abstract 접근제어자 function 메소드이름();<br/>


    # 추상 클래스(abstract class) <br/>
    최소한 하나 이상의 추상 메소드를 포함하는 클래스를 추상 클래스라고 한다. <br/>

    즉, 반드시 사용되어야 하는 메소드를 추상클래스에 추상 메소드로 선언해 놓해놓으면,<br/>
    이 클래스를 상속 받는 모든 클래스에서 이 추상 메소드를 반드시 재정의 해야 한다. <br/>

    abstract class AbstractClass            // 추상 클래스  <br/>
    { <br/>
        abstract protected function move(); // 추상 메소드  <br/>
        abstract protected function stop();  <br/>
    
        public function start() // 공통 메소드  <br/>
        {  <br/>
            ...  <br/>
        } <br/>
    } <br/>

    이러한 추상 클래스는 정의되어 있지 않는  추상 메소드를 포함하고 있으므로, 인스턴스를 생성할 수 없다.  <br/>
    <br/> <br/> <br/>
    인터페이스 (interface) <br/>
    인터페이스란 다른 클래스를 작성할 때 기본이 되는 틀을 제공하면서, <br/>
    다른 클래스 사이에 중간 매개 역할도 담당하는 일종의 추상 클래스를 의미한다. <br/>

    * 인터페이스의 모든 메소드는 클래스 안에서 모두 구현되어야 한다.
"; 

    interface Transport              // 인터페이스의 정의
    {
        public function move();      // 구현할 메소드
        public function stop();
    }

    class Car implements Transport   // Transport 인터페이스를 구현하는 Car 클래스
    {
        function move()              // 메소드 구현
        {
            echo "move";
        }
        function stop()              // 메소드 구현
        {
            echo "stop";
        }
    }


    $Car = new Car(); 
    $Car->move();

    interface Transport2              // 인터페이스의 정의
    {
        public function move2();      // 구현할 메소드
        public function stop2();
    }

    //인터페이스는 클래스와 달리 각각의 인터페이스를 쉼표로 구분하여 여러개의 인터페이스를 동시에 상속 받을 수 있다.
    class Car2 implements Transport,Transport2   // Transport 인터페이스를 구현하는 Car 클래스
    {
        function move(){echo "move";}
        function stop(){echo "stop";}
        function move2(){echo "move2";}
        function stop2(){echo "stop2";}
    }

    $Car2 = new Car2();
    $Car2 ->stop2();
    

?>



</body>

</html>