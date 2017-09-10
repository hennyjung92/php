<?header("content-type:text/html; charset=UTF-8");


if(!$wp_hp_member[wp_hp_id])Error("로그인 후 이용해주세요.");

$wp_hp_review_no=$_POST[$wp_hp_review_no];
$wp_hp_review_title=$_POST[wp_hp_review_title];
$wp_hp_member_id = $_POST[wp_hp_member_id];
$wp_hp_review_date = date("YmdHis",time()); // 날짜, 시간
$wp_hp_review_content=$_POST[wp_hp_review_content];
$wp_hp_review_available = 1;
$wp_hp_review_HIT = 0;

if(!$wp_hp_review_title)Error("제목을 입력하세요.");
if(!$wp_hp_review_content)Error("내용을 입력하세요.");
// 쿼리전송
$query = "insert into wp_hp_reviewBBS
          values('$wp_hp_review_no','$wp_hp_review_title','$wp_hp_member_id','$wp_hp_review_date','$wp_hp_review_content','$wp_hp_review_available','$wp_hp_review_hit')";
mysql_query("set names utf8",$connect);
mysql_query($query,$connect);

mysql_close; // mysql 끝내기
?>

<script>
    window.alert("회원가입이 완료되었습니다.");
    location.href="index.php";
</script>