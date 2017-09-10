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
?>