<?header("content-type:text/html; charset=UTF-8");

$wp_hp_id=$_POST[wp_hp_id];
$wp_hp_password=$_POST[wp_hp_password];

$connect = mysql_connect("localhost","whopet","whopet123!");
mysql_select_db("whopet",$connect);
if(!$connect){
    echo "연결에 실패하였습니다.".mysql_error();
}

// 쿼리전송
$query = "select * from wp_hp_member where wp_hp_id='$wp_hp_id' and wp_hp_password='$wp_hp_password'";
mysql_query("set names utf8",$connect);
mysql_query($query,$connect);

mysql_close; // 끝내기
?>

<script>
    window.alert("로그인 성공");
    location.href="index.php";
</script>