
<!DOCTYPE html>
<html lang="ko">

<head>
	<meta charset="UTF-8">
	<title>PHP Syntax</title>
</head>

<body>
<a href="/~lcy/phpBase/">뒤로가기</a><br/>
<?php echo "
    # 예외처리 <br/>


    ";

    try
    {
        throw new Exception("예외 메시지"); // 예외 객체 던짐.
    }
    catch(Exception $ex)                    // 예외 처리
    {
        echo $ex->getMessage()."<br>";
        echo "예외가 발생한 파일 경로 : ".$ex->getFile()."<br>";
        echo "예외가 발생한 라인 번호 : ".$ex->getLine()."<br/>";
    }
    finally
    {
        echo "try 블록이 종료되면 무조건 실행되는 코드;"."<br/>";
    };



    // 사용자 정의 예외
    class CustomException extends Exception       // Exception 클래스를 상속 받아 예외 정의
    {
        public function errorMessage()
        {
            $msg = $this->getMessage()."<br/>".
                "예외가 발생한 파일 경로 : ".$this->getFile()."<br/>".
                "예외가 발생한 라인 번호 : ".$this->getLine();
            return $msg;
        }
    }

    try
    {
        throw new CustomException("예외 메시지"); // 예외 객체 던짐.
    }
    catch(CustomException $ex)                    // 예외 처리
    {
        echo $ex->errorMessage();
    }


    /*
    
    다중 예외처리는 당연히 뭐 똑같고
    예외처리안에 예외처리도 가능하다 
    
    */


?>



</body>

</html>