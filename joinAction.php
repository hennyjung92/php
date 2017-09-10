<?header("content-type:text/html; charset=UTF-8");

include("db_connect.php");
$connect = dbconn();

$wp_hp_id=$_POST[wp_hp_id];
$wp_hp_password=$_POST[wp_hp_password];
$wp_hp_name=$_POST[wp_hp_name];
$wp_hp_email=$_POST[wp_hp_email];
$wp_hp_tel=$_POST[wp_hp_tel];

// 쿼리전송
$query = "insert into wp_hp_member(wp_hp_id,wp_hp_password,wp_hp_name,wp_hp_email,wp_hp_tel) 
          values('$wp_hp_id','$wp_hp_password','$wp_hp_name','$wp_hp_email','$wp_hp_tel')";
mysql_query("set names utf8",$connect);
mysql_query($query,$connect);

mysql_close; // mysql 끝내기
?>

<script>
    window.alert("회원가입이 완료되었습니다.");
    location.href="index.php";
</script>