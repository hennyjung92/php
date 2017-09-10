<? header("content-type:text/html; charset=UTF-8");

include("db_connect.php");
$connect = dbconn();
$wp_hp_member = member();

if(!$wp_hp_member[wp_hp_id])Error("로그인 후 이용해주세요.");

$wp_hp_review_title = $_POST[wp_hp_review_title];
$wp_hp_review_content = $_POST[wp_hp_review_content];

if(!$wp_hp_review_title)Error("제목을 입력하세요.");
if(!$wp_hp_review_content)Error("내용을 입력하세요.");

$query = "update wp_hp_reviewBBS 
          set wp_hp_review_title='$wp_hp_review_title',
              wp_hp_review_content ='$wp_hp_review_content'
          where wp_hp_review_no = '$wp_hp_review_no'
              ";
mysql_query("set names utf8", $connect);
mysql_query($query, $connect);

mysql_close;
?>

<script>
    window.alert("수정 되었습니다.");
    location.href="review_detail.php?wp_hp_review_no=<?=$wp_hp_review_no?>";
</script>
