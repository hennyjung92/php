<!DOCTYPE html>
<html>
    <title>NOTICE</title>
    <? include("./common/head.php"); ?>
<body>
<? include("./common/header.php"); ?>
<?
$wp_hp_field = $_GET[wp_hp_field];
$_page = $_GET[_page];

$view_total = 4; // 한 페이지에 보이는 수
if(!$_page)($_page=1); // 페이지 번호가 지정이 안되었을 경우
$page = ($_page-1)*$view_total;

$query = "select count(*) from wp_hp_reviewBBS where wp_hp_field='$wp_hp_field'"; // 총 게시글 수
mysql_query("set names utf8");
$result = mysql_query($query, $connect);
$temp = mysql_fetch_array($result);
$total = $temp[0];
?>
<style>
    .col-md-5 p{
        font-family: 'Noto Sans KR', sans-serif;
        line-height:1.8em;
        margin-top:10px;
    }
</style>
<section id="notice">
    <section class="py-5">
        <div class="container" style="padding-top:30px; padding-bottom:30px;">
            <h1 class="text-center display-4" style="letter-spacing: 1px;">Notice & Events</h1>
        </div>
    </section>

    <!-- Page Content -->
    <div class="container">
        <!-- Project One -->
        <?
        $query = "select * from wp_hp_reviewBBS where wp_hp_field ='$wp_hp_field' order by wp_hp_review_no desc limit $page, $view_total";
        $result = mysql_query($query, $connect);
        $cnt = 1; // 게시물 나열 번호
        while($data = mysql_fetch_array($result)){
            ?>
            <div class="row">
                <div class="col-md-7">
                    <img class="img-fluid rounded mb-3 mb-md-0" src='../data/<?=$data[file01]?>' alt="" style="display: block; margin-left: auto; margin-right: auto;">
                </div>
                <div class="col-md-5">
                    <h3 style="font-weight: 400; font-size:25px;"><?=$data[wp_hp_review_title]?></h3>
                    <p><?=$data[wp_hp_review_summary]?></p>
                    <a class="btn btn-primary" href="notice_detail.php?wp_hp_review_no=<?=$data[wp_hp_review_no]?>&wp_hp_field=<?=$wp_hp_field?>">View More
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
            <!-- /.row -->

            <hr>

            <?
            $cnt++;
        }
        ?>
        <div class="row">
            <div class="col-sm-12">
                <div class="text-center">
                    <? include('paging.php');?>
                </div>
                <a href="../en/notice_write.php?wp_hp_field=<?=$wp_hp_field?>" class="btn btn-outline-primary pull-right">Write</a>
            </div>
        </div>
        <br><br>
    </div>
    <!-- /.container -->
    <? include("./common/footer.php"); ?>
</body>
</html>