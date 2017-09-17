<?php
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
if ($lang == "ko") { //index.php 설정이 한국어 일 때
    echo("<script>location.href='./ko/index.php'
            </script>");
}

elseif ($lang == "en"){ // 영어일 때
    echo("<script>location.href='./en/index.php'
            </script>");
}

else  { // 한국어 영어도 아닐 때
    echo("<script>location.href='./en/index.php'
            </script>");
}
?>