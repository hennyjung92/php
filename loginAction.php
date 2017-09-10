<?header("content-type:text/html; charset=UTF-8"); ob_start;
// ob_start 함수 : 출력 버퍼링 함수. 출력문을 임시 버퍼에 저장시켜 header, cookie,session 함수 진행이 끝나면 temp에 저장된 거 출력

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
    Error("아이디를 입력하세요");}
elseif(!$wp_hp_member[wp_hp_id])Error("존재하지 않는 회원 아이디입니다.");

if(!$wp_hp_password){
    Error("비밀번호를 입력하세요");}
elseif($wp_hp_member[wp_hp_password]!=$wp_hp_password)Error("비밀번호가 같지 않습니다.");

if($wp_hp_member[wp_hp_id] and $wp_hp_member[wp_hp_password]==$wp_hp_password) {
    $tmp = $wp_hp_member[wp_hp_id] . "//" . $wp_hp_member[wp_hp_password];
    setcookie("COOKIES", $tmp, time() * 60 * 60 * 24, "/"); // 24시간동안 유효
}
?>
<script>
window.alert("로그인 되었습니다");
location.href="index.php";
</script>