<?header("content-type:text/html; charset=UTF-8");

$wp_hp_id=$_POST[wp_hp_id];
$wp_hp_password=$_POST[wp_hp_password];

$connect = mysql_connect("localhost","whopet","whopet123!");
mysql_select_db("whopet",$connect);
if(!$connect){
    echo "연결에 실패하였습니다.".mysql_error();
}

// 쿼리전송
$query = "select * from wp_hp_member where wp_hp_id='$wp_hp_id'";
mysql_query("set names utf8",$connect);
$result = mysql_query($query,$connect);
$wp_hp_member = mysql_fetch_array($result);

if(!$wp_hp_id)Error("아이디를 입력하세요.");
else if(!$wp_hp_member[wp_hp_id])Error("존재하지 않는 아이디입니다.");

if(!$wp_hp_password)Error("비밀번호를 입력하세요.");
else if($wp_hp_member[$wp_hp_password]!=$wp_hp_password)Error("비밀번호가 맞지 않습니다");

mysql_close; // 끝내기
?>

<script>
    window.alert("로그인 성공");
    location.href="index.php";
</script>