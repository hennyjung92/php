<?header("content-type:text/html; charset=UTF-8");
session_start();
include("../common/db_connect.php");
$connect = dbconn();

$wp_hp_id=$_POST[wp_hp_id];
$wp_hp_password_security=$_POST[wp_hp_password];
$wp_hp_password = md5($wp_hp_password_security); // 비번 암호화

if(isset($wp_hp_id)){
    $query = "select * from wp_hp_member where wp_hp_id='$wp_hp_id' and wp_hp_password='$wp_hp_password'";
    mysql_query("set names utf8",$connect);
    $result = mysql_query($query,$connect);

    if(mysql_num_rows($result)>0) {
        $_SESSION['wp_hp_id']=$wp_hp_id;
        echo 1;
    }
    else{
        echo 0;
    }
}
?>

