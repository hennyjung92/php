<?php
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
if ($lang == "ko") { $strings = array ("예", "아니오", "취소", "로그인", "이 메시지는 테스트 메시지입니다.", "이 페이지의 언어는 한국어입니다.");
}
elseif ($lang == "en"){ $strings = array ("Yes", "No", "Cancel", "Sign in", "This message is a test message.", "The language of this page is English.");
}
else  {
    $strings = array ("Yes", "No", "Cancel", "Sign in", "This message is a test message.", "The language of this page is English.");
}echo

" <br><h1>브라우저 언어 : $lang</h1> 
      <p> <strong>예</strong> : $strings[0] <br> 
      <strong>아니오</strong> : $strings[1] <br> 
      <strong>취소</strong> : $strings[2] <br> 
      <strong>로그인</strong> : $strings[3] <br> 
      <strong>이 메시지는 테스트 메시지입니다.</strong> : $strings[4] <br> 
      <strong>이 페이지의 언어는 ~~어입니다.</strong> : $strings[5] </p> ";

?>