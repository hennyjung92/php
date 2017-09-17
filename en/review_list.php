<!DOCTYPE html>
<html>
    <title>REVIEW_LIST</title>
    <? include("head.php"); ?>
<style>
    .container th,td{
        font-family: 'Noto Sans KR', sans-serif;
        font-size:15px;
        line-height:1.8em;
        margin-top:10px;
    }
    h1{
        font-family:'Kanit', sans-serif;
        font-weight:600;
        letter-spacing:-1px;
        font-size:40px;
    }
</style>

<body>
<? include("header.php"); ?>

<section class="py-5 bg-image-full" style="background-image: url('../img/review.jpg');opacity:0.8 !important;">
    <!-- Put anything you want here! There is just a spacer below for demo purposes! -->
    <div style="height: 250px;"></div>
</section>

<section id="review">
    <section class="py-5">
        <div class="container">
            <h1 class="text-center">Review</h1>
        </div>
    </section>
<?
$wp_hp_field = $_GET[wp_hp_field];
$_page = $_GET[_page];

$view_total = 10; // 한 페이지에 보이는 수
if(!$_page)($_page=1); // 페이지 번호가 지정이 안되었을 경우
$page = ($_page-1)*$view_total;

$query = "select count(*) from wp_hp_reviewBBS where wp_hp_field='$wp_hp_field'"; // 총 게시글 수
mysql_query("set names utf8");
$result = mysql_query($query, $connect);
$temp = mysql_fetch_array($result);
$total = $temp[0];
?>

    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-sm-2">
            </div>
            <div class="col-lg-8 col-sm-8">
                <table class="table table-hover" style="text-align:center;">
                    <thead class="thead-default" >
                    <tr>
                        <th style="text-align:center;">No</th>
                        <th style="text-align:center;">Title</th>
                        <th style="text-align:center;">ID</th>
                        <th style="text-align:center;">Date</th>
                        <th style="text-align:center;">Hit</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?
                    $query = "select * from wp_hp_reviewBBS where wp_hp_field ='$wp_hp_field' order by wp_hp_review_no desc limit $page, $view_total";
                    $result = mysql_query($query, $connect);
                    $cnt = 1; // 게시물 나열 번호
                    while($data = mysql_fetch_array($result)){
                    ?>
                        <tr>
                            <td><?=$cnt?></td>
                            <td><a href="review_detail.php?wp_hp_review_no=<?=$data[wp_hp_review_no]?>&wp_hp_field=<?=$wp_hp_field?>">
                                    <?=$data[wp_hp_review_title]?></a></td>
                            <td><?=$data[wp_hp_member_id]?></td>
                            <td><?=$data[wp_hp_review_date]?></td>
                            <td><?=$data[wp_hp_review_hit]?></td>
                    <?
                        $cnt++;
                        }
                    ?>
                        </tr>
                    </tbody>
                </table>
                <br>
                <hr>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="text-center">
                            <? include('paging.php');?>
                            <a href="review_write.php?wp_hp_field=<?=$wp_hp_field?>" class="btn btn-outline-primary pull-right">Write</a>
                        </div>
<!--                        <a href="review_write.php?wp_hp_field=--><?//=$wp_hp_field?><!--" class="btn btn-outline-primary pull-right">Write</a>-->
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-sm-2"></div>
        </div>
    </div>
    <br><br><br><br><br>
</section>
<? include("footer.php"); ?>
</body>
</html>