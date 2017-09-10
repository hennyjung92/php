<? header("content-type:text/html; charset=UTF-8");
    setcookie("COOKIES","",0,"/"); // 쿠키 삭제 - cookie명 / 쿠키값 / 시간 / 저장위치
?>
<script>
    window.alert("로그아웃 되었습니다.");
    location.href="index.php";
</script>
