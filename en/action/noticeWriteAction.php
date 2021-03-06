<?header("content-type:text/html; charset=UTF-8");
include("../common/db_connect.php");
$connect = dbconn();
$wp_hp_member = member();

if(!$wp_hp_member[wp_hp_id])Error("Please try again after logging in.");

$wp_hp_field = $_POST[wp_hp_field];
$wp_hp_review_title=$_POST[wp_hp_review_title];
$wp_hp_member_id = $_POST[wp_hp_member_id];
$wp_hp_review_date = date("YmdHis",time()); // 날짜, 시간
$wp_hp_review_summary=$_POST[wp_hp_review_summary];
$wp_hp_review_content=$_POST[wp_hp_review_content];
$file01 = $_POST[file01];

if(!$wp_hp_review_title)Error("Please enter title.");
if(!$wp_hp_review_summary)Error("Please enter short description.");
if(!$wp_hp_review_content)Error("Please enter contents.");

if($_FILES[file01][name]){
    $_FILES['file01']['size'];
    if($size > 3145728)Error("File size: limited to 2MB.");

    $file01_name = strtolower($_FILES['file01']['name']); // 파일명과 확장자를 소문자로 변경
    $file01_split = explode(".", $file01_name); // 파일명과 확장자 분리

    $extexplode = $file01_split[count($file01_split)-2.3]; // 파일명만 가져오기
    $file01_type = $file01_split[count($file01_split)-1]; // 확장자만 가져오기

    $img_ext = array('jpg','jpeg','gif','png'); // 이 확장자만 저장 가능 - 확장자 종류 배열에 넣는다
    if(array_search($file01_type,$img_ext)===false)Error("Not an image file.");

    $tates = date("mdhis",time()); // 날짜 (월일시간분초)
    $newFile01 = chr(rand(97,122)).chr(rand(97,122)).$tates.rand(1,9).rand(1,9).".".$file01_type; // 파일명 생성 - 파일 중복 방지

    $dir ="../../data/"; // 업로드 디렉토리 지정
    move_uploaded_file($_FILES['file01']['tmp_name'],$dir.$newFile01); // tmp_name : 임시 파일 경로
    chmod($dir.$newFile01,0777);
}
if(!$newFile01)Error("파일을 첨부해주세요.");

if(isset($wp_hp_review_title, $wp_hp_review_summary, $wp_hp_review_content, $newFile01)) {
// 쿼리전송
    $query = "insert into wp_hp_reviewBBS(wp_hp_review_title,wp_hp_member_id,wp_hp_review_date,wp_hp_review_content, file01,wp_hp_field, wp_hp_review_summary)
          values('$wp_hp_review_title','$wp_hp_member_id','$wp_hp_review_date','$wp_hp_review_content','$newFile01','$wp_hp_field','$wp_hp_review_summary')";
    mysql_query("set names utf8", $connect);
    mysql_query($query, $connect);

    mysql_close; // mysql 끝내기
}
?>

<script>
    window.alert("Your post has been uploaded :)");
    location.href="../notice_list.php?wp_hp_field=<?=$wp_hp_field?>";
</script>