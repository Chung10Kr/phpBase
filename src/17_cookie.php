<?php
    $cookieName = "city";
    $cookieValue = "서울";
    setcookie($cookieName, $cookieValue, time()+60, "/"); // 쿠키가 60초 간 지속됨.

    //setcookie() 함수가 포함된 PHP 스크립트 코드는 <html>태그보다 앞서 위치해야 합니다.
?>

<!DOCTYPE html>
<html lang="ko">

<head>
	<meta charset="UTF-8">
	<title>PHP Syntax</title>
</head>

<body>
<a href="/~lcy/phpBase/">뒤로가기</a><br/>
<?php echo "
    # 쿠키(cookie) <br/>
    
    쿠키란 웹사이트에 접속할 때 서버에 의해 사용자의 컴퓨터에 저장되는 정보를 의미한다.

    사용자의 컴퓨터에 마치 과자 부스러기처럼 남아 있다고 해서 쿠키
    ";
?>

<br/><br/><br/>
<?php
    if(!isset($_COOKIE[$cookieName])) { // 해당 쿠키가 존재하지 않을 때
        echo "{$cookieName}라는 이름의 쿠키는 아직 생성되지 않았습니다.<br/>";
    } else {                            // 해당 쿠키가 존재할 때
        echo "{$cookieName}라는 이름의 쿠키가 생성되었으며, 생성된 값은 '".$_COOKIE[$cookieName]."'입니다.<br/>";
    }
?>

<?php
    $cookieName = "city";
    $cookieValue = "서울";
    //setcookie($cookieName, $cookieValue, time()-60, "/"); // 쿠키를 삭제함. unset($_COOKIE["city"])와 같음.
?>

<?php
    echo "{$cookieName}라는 이름의 쿠키가 삭제되었습니다.";
?>


</body>

</html>