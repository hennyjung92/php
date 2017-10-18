<?//ob_start();?>
<html>
    <title>WHOPET - Notice</title>
    <? include("./common/head.php"); ?>
<body>
<? include("./common/header.php"); ?>

<?
$wp_hp_review_no = $_GET[wp_hp_review_no];
$wp_hp_field = $_GET[wp_hp_field];
$reviewBBS =$wp_hp_review_no;
    $_query = "update wp_hp_reviewBBS set wp_hp_review_hit =wp_hp_review_hit+1 where wp_hp_review_no = '$wp_hp_review_no'";
    mysql_query($_query, $connect);
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
    <div class="row">
        <div class="col-lg-2 col-sm-2"></div>
        <!-- Post Content Column -->
        <div class="col-lg-8 col-sm-8">
            <!-- Preview Image -->
            <img class="img-fluid rounded" src='../data/<?=$data[file01]?>' alt="" style="display: block; margin-left: auto; margin-right: auto;">
            <hr>
            <!-- Date/Time -->
            <p>Posted on <?=$data[wp_hp_review_date]?></p>
            <hr>
            <!-- Post Content -->
            <p class="lead"><?=$data[wp_hp_review_title]?></p>
            <p><?=$data[wp_hp_review_content]?></p>
            <hr>
        </div>
        </div>
    <div class="text-center" style="padding-top:20px; padding-bottom:30px;">
        <? if($wp_hp_member[wp_hp_id]!=$data[wp_hp_member_id]){?>
            <a href="notice_list.php?wp_hp_field=<?=$wp_hp_field?>" class="btn btn-outline-success">list</a>
        <?}
        else { ?>
            <a href="notice_list.php?wp_hp_field=<?=$wp_hp_field?>" class="btn btn-outline-success">list</a>
            <a href="notice_update.php?wp_hp_review_no=<?=$data[wp_hp_review_no]?>&wp_hp_field=<?=$wp_hp_field?>" class="btn btn-outline-primary">modify</a>
            <a href="action/deleteAction.php?wp_hp_review_no=<?=$data[wp_hp_review_no]?>&wp_hp_field=<?=$wp_hp_field?>" class="btn btn-outline-danger" onclick="return confirm('Are you sure to delete this post?')">delete</a>
        <?} ?>
    </div>
    <div class="col-lg-2 col-sm-2"></div>
    </div>
    <!-- /.row -->
</div>
<!-- /.container -->
</div>
<? include("./common/footer.php"); ?>
</body>
</html>