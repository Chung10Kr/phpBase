<!DOCTYPE html>
<html lang="ko">

<head>
	<meta charset="UTF-8">
	<title>PHP Syntax</title>
</head>

<body>
<a href="/~lcy/phpBase/">뒤로가기</a><br/>


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    이름 : <input type="text" name="name"><br/>
    성별 :
    <input type="radio" name="gender" value="female">여자
    <input type="radio" name="gender" value="male">남자 <br/>
    이메일 : <input type="text" name="email"> <br/>
    홈페이지 : <input type="text" name="website"> <br/>
    관심 있는 분야 :
    <input type="checkbox" name="favtopic[]" value="movie"> 영화
    <input type="checkbox" name="favtopic[]" value="music"> 음악
    <input type="checkbox" name="favtopic[]" value="game"> 게임
    <input type="checkbox" name="favtopic[]" value="coding"> 코딩 <br/>
    기타 : <textarea name="comment"></textarea> <br/>
    <input type="submit" value="전송">
</form><br/>



<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $gender = $_POST["gender"];
    $email = $_POST["email"];
    $website = $_POST["website"];
    $favtopic = $_POST["favtopic"];
    $comment = $_POST["comment"];
}

echo "<h2>입력된 회원 정보</h2>";
echo "이름 : ".$name."<br>";
echo "성별 : ".$gender."<br>";
echo "이메일 : ".$email."<br>";
echo "홈페이지 : ".$website."<br>";
echo "관심 있는 분야 : ";
if (!empty($favtopic)) {
    foreach ($favtopic as $value) {
        echo $value." ";
    }
}
echo "<br>기타 : ".$comment; ?>
?>

</body>

</html>