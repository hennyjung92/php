<?header("content-type:text/html; charset=UTF-8");

include("../common/db_connect.php");
$connect = dbconn();

$wp_hp_id=$_POST[wp_hp_id];
$wp_hp_password_security=$_POST[wp_hp_password];
$wp_hp_password_check=$_POST[wp_hp_password_check];
$wp_hp_name=$_POST[wp_hp_name];
$wp_hp_email=$_POST[wp_hp_email];
$wp_hp_tel=$_POST[wp_hp_tel];

$result = mysql_query("select count(*) as total from wp_hp_member where wp_hp_id='$wp_hp_id'");
$data=mysql_fetch_assoc($result);

if($data['total']!=0) echo 0;

else if(preg_match("/[^a-z A-Z 0-9]/",$wp_hp_id)) echo 1;

else if($wp_hp_password_security!=$wp_hp_password_check) echo 2;

else {
    $wp_hp_password = md5($wp_hp_password_security); // 비번 암호화
    // 쿼리전송
    $query = "insert into wp_hp_member(wp_hp_id,wp_hp_password,wp_hp_name,wp_hp_email,wp_hp_tel) 
          values('$wp_hp_id','$wp_hp_password','$wp_hp_name','$wp_hp_email','$wp_hp_tel')";
    mysql_query("set names utf8", $connect);
    mysql_query($query, $connect);

    mysql_close; // mysql 끝내기

    echo 3;
}
?>
