<?ob_start();?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>REVIEW DETAIL</title>
    <? include("head.php"); ?>

</head>
<body>
<? include("header.php"); ?>
<?
if(!$wp_hp_member[wp_hp_id])Error("로그인 후 이용해주세요.");
$wp_hp_review_no = $_GET[wp_hp_review_no];
$wp_hp_field = $_GET[wp_hp_field];
$reviewBBS =$wp_hp_review_no;
if($wp_hp_review_no != $_COOKIE['hit_reviewBBS_'.$wp_hp_review_no]) {
    $_query = "update wp_hp_reviewBBS set wp_hp_review_hit =wp_hp_review_hit+1 where wp_hp_review_no = '$wp_hp_review_no'";
    mysql_query($_query, $connect);
    setcookie("hit_reviewBBS_" . $wp_hp_review_no, "$wp_hp_review_no", time(), "/");
}
?>
<section class="py-5">
    <div class="container" style="padding-top:30px; padding-bottom:30px;">
        <h1 class="text-center display-4">Detail View</h1>
    </div>
</section>
<?
$query = "select * from wp_hp_reviewBBS where wp_hp_review_no='$wp_hp_review_no'";
mysql_query("set names utf8");
$result = mysql_query($query,$connect);
$data = mysql_fetch_array($result);
?>
<!-- Page Content -->
<div class="container">
    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-2 mb-2"></div>
        <!-- Map Column -->
        <div class="col-lg-8 mb-4">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="form-group">
                        <label>TITLE</label>
                        <input type="text" class="form-control" name="wp_shopbbsTitle" maxlength="50" value="<?=$data[wp_hp_review_title]?>" readonly >
                    </div>
                    <div class="form-group">
                        <label>ID</label>
                        <input type="text" class="form-control" name="wp_shopbbsTitle" maxlength="50" value="<?=$data[wp_hp_member_id]?>" readonly >
                    </div>
                    <div class="form-group">
                        <label>DATE</label>
                        <input type="text" class="form-control" name="wp_shopbbsTitle" maxlength="50" value="<?=$data[wp_hp_review_date]?>" readonly >
                    </div>
                    <div>
                        <img src='./data/<?=$data[file01]?>' style="width: auto; height: auto; max-width: 480px; max-height: 500px;">
                    </div>
                    <br>
                    <div class="form-group">
                        <label>CONTENTS</label>
                        <textarea class="form-control" name="wp_shopbbsContent" rows="10" maxlength="2048" readonly ><?=$data[wp_hp_review_content]?></textarea>

                    </div>

                </div>
                <div class="col-lg-2"></div>
            </div>
            <div class="text-center" style="padding-top:20px; padding-bottom:30px;">

                <? if($wp_hp_member[wp_hp_id]!=$data[wp_hp_member_id]){?>
                <a href="review_list.php?wp_hp_field=<?=$wp_hp_field?>" class="btn btn-outline-success">list</a>
                <?}
                 else { ?>
                <a href="review_list.php?wp_hp_field=<?=$wp_hp_field?>" class="btn btn-outline-success">list</a>
                <a href="review_update.php?wp_hp_review_no=<?=$data[wp_hp_review_no]?>&wp_hp_field=<?=$wp_hp_field?>" class="btn btn-outline-primary">modify</a>
                <a href="deleteAction.php?wp_hp_review_no=<?=$data[wp_hp_review_no]?>&wp_hp_field=<?=$wp_hp_field?>" class="btn btn-outline-danger" onclick="return confirm('정말로 삭제하시겠습니까?')">delete</a>
                <?} ?>
            </div>
            <div class="col-lg-2 mb-2"></div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</div>
<? include("footer.php"); ?>
</body>
</html>