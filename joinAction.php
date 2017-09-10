<?header("content-type:text/html; charset=UTF-8");

$wp_hp_id=$_POST[wp_hp_id];
$wp_hp_password=$_POST[wp_hp_password];
$wp_hp_name=$_POST[wp_hp_name];
$wp_hp_email=$_POST[wp_hp_email];
$wp_hp_tel=$_POST[wp_hp_tel];


$connect = mysql_connect("localhost","whopet","whopet123!");
mysql_select_db("whopet",$connect);
if(!$connect){
    echo "연결에 실패하였습니다.".mysql_error();
}

// 쿼리전송
$query = "insert into wp_hp_member(wp_hp_id,wp_hp_password,wp_hp_name,wp_hp_email,wp_hp_tel) 
          values('$wp_hp_id','$wp_hp_password','$wp_hp_name','$wp_hp_email','$wp_hp_tel')";

mysql_query($query,$connect);

mysql_close; // 끝내기
?>

