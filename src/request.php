<?php 


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = $_POST["name"];
    $gender  = $_POST["gender"];
    $email   = $_POST["email"];
    $website = $_POST["website"];
    $favtopic = $_POST["favtopic"];
    $comment  = $_POST["comment"];
}
echo "

이름:{ $name     }<br/>
성별:{ $gender   }<br/>
이메일:{ $email    }<br/>
홈페이지:{ $website  }<br/>
관임있는 분야: { $favtopic }<br/>
기타 : { $comment  }<br/>

";
?>