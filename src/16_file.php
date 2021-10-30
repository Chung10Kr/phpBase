<!DOCTYPE html>
<html lang="ko">

<head>
	<meta charset="UTF-8">
	<title>PHP Syntax</title>
</head>

<body>
<a href="/~lcy/phpBase/">뒤로가기</a><br/>
<?php echo "
    # 파일처리과정<br/>

    파일읽기 단계 <br/>
    1. 파일열기, 열리지 않으면 종료.<br/>
    2. 파일에서 데이터 읽기<br/>
    3. 파일 닫기<br/>

    <br/><br/>
    파일 쓰기 단계 <br/>
    1. 파일열기, 파일 존재하지 않으면 생성함.<br/>
    2. 파일에서 데이터 쓰기<br/>
    3. 파일 닫기<br/><br/>

"; 
/*
$fp = fopen("file/list.txt", 'a'); //파일 열기
//fgets() : 파일에서 데이터를 한 번에 한줄씩 읽어들인다.
while(!feof($fp)){               // 파일의 끝까지
    $member = fgets($fp);        // 한 줄씩 $member 변수에 저장하고 
    echo $member."<br>";         // 출력함.
}

$fp = fopen("file/list.txt", 'r');    // list.txt 파일을 읽기 전용으로 열고 반환된 파일 포인터를 $fp에 저장함.
while(!feof($fp)){               // 파일의 끝까지
    //fgetc() : 파일에서 데이터를 한 번에 한글자씩 읽어 들인다.
    $char = fgetc($fp);          // 한 글자씩 $char 변수에 저장하고
 
    if($char == "\n")            // 출력함.
        $char = "<br>";
 
    if(!feof($fp))
        echo $char;
}

//readfile() : 파일에서 데이터를 한 번에 모두 읽어 들입니다.
echo readfile("file/list.txt");


//파일닫기
fclose($fp);
*/


$fp = fopen("file/list.txt", 'a');    // list.txt 파일을 쓰기 전용으로 열고 반환된 파일 포인터를 $fp에 저장.

$str = "aaa"."\t"."BBB"."\t"."ccc"."\n";
fwrite($fp, $str);               // list.txt 파일에 $str 변수를 저장함.
fclose($fp);                     // list.txt 파일 닫음.


if(file_exists("list.txt"))
    echo "파일이 존재합니다.";
else
    echo "파일이 존재하지 않습니다.";


if(unlink("list.txt"))
    echo "파일 삭제 성공";
else
    echo "파일 삭제 실패";
?>



</body>

</html>