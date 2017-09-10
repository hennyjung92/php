<?
function dbconn(){
    $host_name="localhost";
    $db_user_id="whopet";
    $db_name="whopet";
    $db_pw="whopet123!";
    $connect = mysql_connect($host_name,$db_user_id,$db_pw);
    mysql_query("set names utf8",$connect);
    mysql_select_db("$db_name",$connect);
    if(!$connect)die("연결에 실패했습니다.".mysql_error());
    return $connect;
}

//에러 메세지 출력
function Error($msg){
    echo "
    <script>
    window.alert('$msg');
    history.back(1);
</script>
    ";
    exit;
}

// cookie 가져오기
function member(){
    global $connect;
    $temps = $_COOKIE["COOKIES"];
    $cookise = explode("//", $temps);
    // 아이디 $cookise[0];
    // pw $cookise[1];
    // 회원정보
    $query = "select * from wp_hp_member where wp_hp_id='$cookise[0]'";
    mysql_query("set names utf8",$connect);
    $result = mysql_query($query, $connect);
    $wp_hp_member =  mysql_fetch_array($result);
    return $wp_hp_member;
    }

?>