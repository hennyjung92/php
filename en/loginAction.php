<?header("content-type:text/html; charset=UTF-8");

include("db_connect.php");
$connect = dbconn();

$wp_hp_id=$_POST[wp_hp_id];
$wp_hp_password_security=$_POST[wp_hp_password];
$wp_hp_password = md5($wp_hp_password_security); // 비번 암호화

// 쿼리전송
$query = "select * from wp_hp_member where wp_hp_id='$wp_hp_id'";
mysql_query("set names utf8",$connect);
$result = mysql_query($query,$connect);
$wp_hp_member = mysql_fetch_array($result);

if(!$wp_hp_id){
    Error("Please enter your ID.");}
elseif(!$wp_hp_member[wp_hp_id])Error("The member ID does not exist.");

if(!$wp_hp_password){
    Error("Please enter your password.");}
elseif($wp_hp_member[wp_hp_password]!=$wp_hp_password)Error("The password is invalid.");

if($wp_hp_member[wp_hp_id] and $wp_hp_member[wp_hp_password]==$wp_hp_password) {
session_start();
$_SESSION['wp_hp_id']=$wp_hp_member[wp_hp_id];
}
?>

<script>
window.alert("Welcome to WHOPET!");
location.href="index.php";
</script>