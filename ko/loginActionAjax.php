<?header("content-type:text/html; charset=UTF-8");
session_start();
include("db_connect.php");
$connect = dbconn();

$wp_hp_id=$_POST[wp_hp_id];
$wp_hp_password_security=$_POST[wp_hp_password];
$wp_hp_password = md5($wp_hp_password_security); // 비번 암호화

//if(isset($wp_hp_id)){
//    $query = "select * from wp_hp_member where wp_hp_id='$wp_hp_id' and wp_hp_password='$wp_hp_password'";
//    $result = mysql_query($query,$connect);
//    $wp_hp_member = mysql_fetch_array($result);
//
//    if(mysql_num_rows($result)>0)
//    {
//        $_SESSION['wp_hp_id'] = $wp_hp_member[wp_hp_id];
//        echo 'yes';
//    }
//    else{
//        echo 'no';
//    }
//}

// 쿼리전송
$query = "select * from wp_hp_member where wp_hp_id='$wp_hp_id'";
mysql_query("set names utf8",$connect);
$result = mysql_query($query,$connect);
$wp_hp_member = mysql_fetch_array($result);

//if(mysql_num_rows($result)>0)
//{
//    $_SESSION['wp_hp_id'] = $wp_hp_member[wp_hp_id];
//    echo 'yes';
//}
//else{
//    echo 'no';
//}


if($wp_hp_member[wp_hp_id] and $wp_hp_member[wp_hp_password]==$wp_hp_password) {
    //session_start();
    $_SESSION['wp_hp_id']=$wp_hp_member[wp_hp_id];
    echo 'yes';
}
else{
    echo 'no';
}
?>
<script>
    window.alert("<?=$wp_hp_member[wp_hp_id];?>님 환영합니다!");
    location.href="index.php";
</script>
