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

<!--<section class="py-5 bg-image-full" style="background-image: url('../img/review.jpg');opacity:0.8 !important;">-->
<!--    <div style="height: 250px;"></div>-->
<!--</section>-->
<header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <!-- Slide One - Set the background image for this slide in the line below -->
            <div class="carousel-item active" style="background-image: url('../img/review.jpg');height: 350px; opacity:0.8 !important;">
                <div class="carousel-caption d-none d-md-block">
                    <!-- <h3>First Slide</h3>
                    <p>This is a description for the first slide.</p> -->
                </div>
            </div>
            <!-- Slide Two - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('../img/review.jpg');height: 350px; opacity:0.8 !important;">
                <div class="carousel-caption d-none d-md-block">
                    <!-- <h3>Second Slide</h3>
                    <p>This is a description for the second slide.</p> -->
                </div>
            </div>
            <!-- Slide Three - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('../img/review.jpg');height: 350px; opacity:0.8 !important;">
                <div class="carousel-caption d-none d-md-block">
                    <!-- <h3>Third Slide</h3>
                    <p>This is a description for the third slide.</p> -->
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</header>

<section id="review">
    <section class="py-5">
        <div class="container">
            <h1 class="text-center">Review</h1>
        </div>
    </section>
<?

$wp_hp_field = $_GET[wp_hp_field];
$_page = $_GET[_page];

$Search_text = $_GET[Search_text];
$Search_mode =$_GET[Search_mode];

$view_total = 10; // 한 페이지에 보이는 수
if(!$_page)($_page=1); // 페이지 번호가 지정이 안되었을 경우
$page = ($_page-1)*$view_total;

$where="wp_hp_review_no";

//검색할 종목을 선택 했을 때.
if($Search_text){
    if($Search_mode==1) $tmp="wp_hp_review_title";
    if($Search_mode==2) $tmp="wp_hp_review_content";

//전체에서 검색
    if($Search_mode==3){
        $where="(wp_hp_review_title like '%$Search_text%' or wp_hp_review_content like '%$Search_text%')";
    }else{
        $where="$tmp like '%$Search_text%'";
    }
}

$href = "&Search_mode=$Search_mode&Search_text=$Search_text"; //검색값 페이지처리에 보내기

$query = "select count(*) from wp_hp_reviewBBS where wp_hp_field='$wp_hp_field' and $where"; // 총 게시글 수
mysql_query("set names utf8");
$result = mysql_query($query, $connect);
$temp = mysql_fetch_array($result);
$total = $temp[0];
?>

    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-1 col-sm-1 col-xs-1">
            </div>
            <div class="col-lg-8 col-md-10 col-sm-10 col-xs-10">
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
                    $query = "select * from wp_hp_reviewBBS where wp_hp_field ='$wp_hp_field' and $where order by wp_hp_review_no desc limit $page, $view_total";
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
                <hr>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="text-center">
                            <? include('paging.php');?>
                        </div>
                        <form action='<?=$PHP_SELF?>'>
                            <td height='20' colspan='5' bgcolor='#FFFFFF' align='right'>
                                Search &nbsp;
                                <select name='Search_mode'>
                                    <option value='3'>전체에서
                                    <option value='1'> 제목에서
                                    <option value='2'>내용에서
                                </select>

                                <input type='text' name='Search_text' size='10'>
                                <input type='submit' value='Search'>
                                &nbsp; &nbsp;
                                <input type='reset' value='리셋' onclick='location.reload();'>
                                &nbsp;
                            </td>
                        </form>
                        <a href="review_write.php?wp_hp_field=<?=$wp_hp_field?>" class="btn btn-outline-primary pull-right">Write</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-1 col-sm-1 col-xs-1"></div>
        </div>
    </div>
    <br><br><br><br><br>
</section>
<? include("footer.php"); ?>
</body>
</html>