
<!DOCTYPE html>
<html lang="ko">

<head>
	<meta charset="UTF-8">
	<title>PHP Syntax</title>
</head>

<body>
<a href="/~lcy/phpBase/">뒤로가기</a><br/>
<?php echo "
    # 세션(session) <br/>
    
    웹 사이트의 여러 페이지에 걸쳐 사용되는 사용자 정보를 저장하는 방법<br/>
    브라우저를 닫아 서버와의 연결을 끝내는 시점까지를 세션이라고 함<br/>

    세션은 서비스가 돌아가는 서버 측에 데이터를 저장하고<br/>
    세션의 키값만을 클라이언트 측에 남겨둡니다.<br/>

    이러한 세션은 보안이 취약한 쿠키를 보완해준다.<br/>

    <br/><br/><br/>



    ";

    $_SESSION["city"] = "부산"; // 세션 변수의 등록
    $_SESSION["gu"] = "사상구";
     
    echo "세션 변수가 등록되었습니다!"."<br/>";

    echo "제가 살고 있는 도시는 {$_SESSION['city']}입니다.<br>";
    echo "그 중에서도 {$_SESSION['gu']}에 살고 있습니다.<br>";
    
    print_r($_SESSION); // 모든 세션 변수의 정보를 연관 배열 형태로 보여줌.

    // 특정 세션 변수의 등록 해지

    if(!isset($_SESSION["city"])) {
        echo "{$_SESSION['city']} 세션 변수가 삭제되었습니다."."<br/>";
        unset($_SESSION["city"]);
    } else {
        echo "해당 세션 변수가 등록되어 있지 않습니다."."<br/>";
    } 

    
    session_unset();   // 모든 세션 변수의 등록 해지
    session_destroy(); // 세션 아이디의 삭제
    
    echo "모든 세션 변수가 등록 해지되었으며, 세션 아이디도 삭제되었습니다."."<br/>";
?>



</body>

</html>