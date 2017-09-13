<?ob_start();?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>NOTICE DETAIL</title>
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
<!--    <h1 class="mt-4 mb-3">Post Title-->
<!--        <small>by-->
<!--            <a href="#">Start Bootstrap</a>-->
<!--        </small>-->
<!--    </h1>-->

    <div class="row">
        <div class="col-lg-2 col-sm-2"></div>
        <!-- Post Content Column -->
        <div class="col-lg-8 col-sm-8">

            <!-- Preview Image -->
            <img class="img-fluid rounded" src='./data/<?=$data[file01]?>' alt="" style="display: block; margin-left: auto; margin-right: auto;">
            <hr>

            <!-- Date/Time -->
            <p>Posted on <?=$data[$wp_hp_review_date]?></p>
            <hr>

            <!-- Post Content -->
            <p class="lead"><?=$data[wp_hp_review_title]?></p>
            <p><?=$data[wp_hp_review_content]?></p>
            <hr>

            <!-- Comments Form -->
            <div class="card my-4">
                <h5 class="card-header">Leave a Comment:</h5>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>

            <!-- Single Comment -->
            <div class="media mb-4">
                <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                <div class="media-body">
                    <h5 class="mt-0">Commenter Name</h5>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                </div>
            </div>

            <!-- Comment with nested comments -->
            <div class="media mb-4">
                <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                <div class="media-body">
                    <h5 class="mt-0">Commenter Name</h5>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.

                    <div class="media mt-4">
                        <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                        <div class="media-body">
                            <h5 class="mt-0">Commenter Name</h5>
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                        </div>
                    </div>

                    <div class="media mt-4">
                        <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                        <div class="media-body">
                            <h5 class="mt-0">Commenter Name</h5>
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    <div class="text-center" style="padding-top:20px; padding-bottom:30px;">

        <? if($wp_hp_member[wp_hp_id]!=$data[wp_hp_member_id]){?>
            <a href="notice_list.php?wp_hp_field=<?=$wp_hp_field?>" class="btn btn-outline-success">list</a>
        <?}
        else { ?>
            <a href="notice_list.php?wp_hp_field=<?=$wp_hp_field?>" class="btn btn-outline-success">list</a>
            <a href="notice_update.php?wp_hp_review_no=<?=$data[wp_hp_review_no]?>&wp_hp_field=<?=$wp_hp_field?>" class="btn btn-outline-primary">modify</a>
            <a href="deleteAction.php?wp_hp_review_no=<?=$data[wp_hp_review_no]?>&wp_hp_field=<?=$wp_hp_field?>" class="btn btn-outline-danger" onclick="return confirm('정말로 삭제하시겠습니까?')">delete</a>
        <?} ?>
    </div>
    <div class="col-lg-2 col-sm-2"></div>
    </div>
    <!-- /.row -->

</div>
<!-- /.container -->
</div>
<? include("footer.php"); ?>
</body>
</html>