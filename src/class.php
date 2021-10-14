<!DOCTYPE html>
<html lang="ko">

<head>
	<meta charset="UTF-8">
	<title>PHP Syntax</title>
</head>

<body>
<a href="/~lcy/phpBase/">뒤로가기</a><br/>
<?php echo "
    # 클래스(Class)와 객체(Object) <br/>
   
    객체(object)란 실생활에서 우리가 인식할 수 있는 사물로 이해할 수 있습니다. <br/>
    이러한 객체의 상태(state)와 행동(behavior)은 각각 프로퍼티(property)와 메소드(method)로 구현됩니다. <br/>
    
    또한, 객체(object)를 만들어 내기 위한 틀이나 설계도와 같은 개념이 바로 클래스(class)입니다. <br/>
    즉, PHP에서는 클래스를 가지고 객체를 생성하여 사용하게 됩니다. <br/> <br/>
    
    다음 예제는 Car 클래스의 객체(object)를 보여주는 예제입니다. <br/>
"; 
    class Person{
        public $publicName;
        private $privateAge;
        protected $privateGender;
        
        //객체를 생성할때마다 생성자라는 메서드를 호출한다.
        public function __construct($name , $age , $gender){
            $this->publicName = $name;
            $this->privateAge = $age;
            $this->privateGender = $gender;
        }
        // 객체를 더는 사용하지 않을때 호출한다.
        public function __desturct(){
            echo ("객체 끝 ^^");
        }
        public function callPerson(){ 
            echo " $this->publicName   HI^^"; 
            $this->callAge();
            $this->callGender();
        }
        private function callAge(){ echo " $this->privateAge   HI^^"; }
        protected function callGender(){ echo " $this->privateGender   HI^^"; }
    };
    $obj = new Person("LEE" , 30 ,"main");
    echo $obj->publicName."<br/>";
    // echo $obj->privateAge; //접근 불가능
    //echo $obj->privateGender; //접근 불가능
    $obj->callPerson();
    //$obj->callAge();
    //$obj->callGender();

?>



</body>

</html>