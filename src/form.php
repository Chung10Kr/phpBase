<!DOCTYPE html>
<html lang="ko">

<head>
	<meta charset="UTF-8">
	<title>PHP Syntax</title>
</head>

<body>
<a href="/~lcy/phpBase/">뒤로가기</a><br/>
<?php echo "
    # Form<br/>
"; 
?>

<a href="form1.php">Form1</a><br/>
<a href="form2.php">Form2</a><br/>
 
<img src="../img/img08.png" style="width:400px; height:400px;"></img>

<?php

echo "
<br/><br/>
ex)<br/>

if (!filter_var(\$website, FILTER_VALIDATE_URL)) {<br/>
    \$websiteMsg = \"홈페이지의 주소를 정확히 입력해 주세요!\";<br/>
}<br/>

";
?>
</body>

</html>