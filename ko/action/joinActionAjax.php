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

//if($data['total']!=0)Error("존재하는 아이디입니다. 다른 아이디를 입력해주세요");
if($data['total']!=0) echo 0;

//if(preg_match("/[^a-z A-Z 0-9]/",$sn_hp_member_id))Error("아이디는 영문 소/대문자와 숫자만 허용됩니다.");
else if(preg_match("/[^a-z A-Z 0-9]/",$wp_hp_id)) echo 1;

//if($sn_hp_member_password_security!=$sn_hp_member_password_check)Error("비밀번호가 일치하지 않습니다. 다시 입력해주세요");
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