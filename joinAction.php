<?header("content-type:text/html; charset=UTF-8");
$connect = mysql_connect("localhost","whopet","whopet123");
mysql_select_db("whopet",$connect);
if(!$connect){
    echo "연결에 실패하였습니다.".mysql_error();
}
?>

