<?
header("content-type:text/html; charset=UTF-8");

include("db_connect.php");
$connect = dbconn();
$wp_hp_member = member();

if(!$wp_hp_member[wp_hp_id])Error("로그인 후 이용해주세요.");

$wp_hp_review_no = $_GET[wp_hp_review_no];
$query = "delete from wp_hp_reviewBBS where wp_hp_review_no ='$wp_hp_review_no' and wp_hp_id ='$wp_hp_member[wp_hp_id]'";
mysql_query($query,$connect);
?>

<script>
    window.alert("글이 삭제되었습니다.");
    location.href="review_list.php";
</script>
