<!DOCTYPE html>
<html>
    <title>WHOPET</title>
    <? include("./common/head.php"); ?>
<body>
<? include("./common/header.php"); ?>
<?
$wp_hp_field = $_GET[wp_hp_field];
$wp_hp_review_no = $_GET[wp_hp_review_no];
$query = "select * from wp_hp_reviewBBS where wp_hp_review_no='$wp_hp_review_no'";
mysql_query("set names utf8");
$result = mysql_query($query,$connect);
$data = mysql_fetch_array($result);
?>

<section class="py-5">
    <div class="container" style="padding-top:30px; padding-bottom:30px;">
        <h1 class="text-center display-4">Update</h1>
    </div>
</section>
<!-- Page Content -->
<div class="container">
    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-2 mb-2"></div>
        <!-- Map Column -->
        <div class="col-lg-8 mb-4">
            <form method="post" action="../ko/action/reviewUpdateAction.php" enctype="multipart/form-data">
                <input type="hidden" name="wp_hp_review_no" value="<?=$data[wp_hp_review_no]?>">
                <input type="hidden" name="wp_hp_field" value="<?=$wp_hp_field?>">
                <div class="form-group">
                    <label>제목</label>
                    <input type="text" class="form-control" name="wp_hp_review_title" maxlength="50" value="<?=$data[wp_hp_review_title]?>" autofocus="autofocus">
                </div>
                <div class="form-group">
                    <label>내용</label>
                    <textarea class="form-control" name="wp_hp_review_content" rows="10" maxlength="2048"><?=$data[wp_hp_review_content]?></textarea>
                </div>
                <div class="form-group">
                    <?if($data[file01]){?>
                    파일 : <?echo "<font>".$data[file01]."</font>";?> &nbsp; &nbsp; &nbsp;
                    <? } ?>
                   <input type="file" class="form-control-file" name="file01">
                </div>
                <div class="text-center" style="padding-top:20px; padding-bottom:30px;">
                    <button type="button" class="btn btn-outline-danger" onclick="history.back()">취소</button>
                    <input type="submit" class="btn btn-outline-primary" value="수정하기">
                </div>
            </form>
        </div> <!-- Contact Details Column -->
        <div class="col-lg-2 mb-2"></div>
    </div>
    <!-- /.row -->
</div>
<!-- /.container -->
<? include("./common/footer.php"); ?>
</body>
</html>