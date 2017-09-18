<!DOCTYPE html>
<html>
    <title>QNA</title>
    <? include("head.php"); ?>
<style>
    .container p{
        font-family: 'Noto Sans KR', sans-serif;
        font-weight:500;
        font-size:15px;
        line-height:1.8em;
        margin-top:10px;
    }
</style>
<body>
<? include("header.php"); ?>
<section class="py-5 bg-image-full" style="background-image: url('../img/wallpaper1.jpg'); opacity:0.8 !important;">
    <!-- Put anything you want here! There is just a spacer below for demo purposes! -->
    <div style="height: 250px;"></div>
</section>

</section>
<div class="container">
    <div class="row" style="padding-top:80px; padding-bottom:80px;">
        <div class="col-lg-3 col-xs-12">
        </div>
        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-4 text-center">
            <a class="btn" href="review_list.php?wp_hp_field=02" style="color:black">
                <i class="fa fa-map-marker fa-5x" aria-hidden="true"></i>
            </a>
            <p class="ns" style="font-size:15px; padding-top: 25px;">디바이스</p>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-4 text-center">
            <a class="btn" href="review_list.php?wp_hp_field=03" style="color:black">
                <i class="fa fa-mobile fa-5x" aria-hidden="true"></i>
            </a>
            <p class="ns" style="font-size:15px; padding-top: 25px;">어플리케이션</p>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-4 text-center">
            <a class="btn" href="review_list.php?wp_hp_field=04" style="color:black">
                <i class="fa fa-shopping-cart fa-5x" aria-hidden="true"></i>
            </a>
            <p class="ns" style="font-size:15px; padding-top: 25px;">쇼핑몰</p>
        </div>
        <div class="col-lg-3 col-xs-12">
        </div>
    </div>
</div>
<!--<div class="container">-->
<!--    <div class="row" style="padding-top:20px; padding-bottom:60px;">-->
<!--        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">-->
<!--        </div>-->
<!--        <div class="h4 col-lg-2 col-md-2 col-sm-2 col-xs-2 text-center mb-4">-->
<!--            <a class="btn" href="review_list.php?wp_hp_field=02" style="color:black">-->
<!--                <i class="fa fa-map-marker fa-5x" aria-hidden="true"></i>-->
<!--            </a>-->
<!--            <div class="card-body">-->
<!--                <p class="card-text">디바이스</p>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--        <div class="h4 col-lg-2 col-md-2 col-sm-2 col-xs-2 text-center mb-4">-->
<!--            <a class="btn" href="review_list.php?wp_hp_field=03" style="color:black">-->
<!--                <i class="fa fa-mobile fa-5x" aria-hidden="true"></i>-->
<!--            </a>-->
<!--            <div class="card-body">-->
<!--                <p class="card-text">어플리케이션</p>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--        <div class="h4 col-lg-2 col-md-2 col-sm-2 col-xs-2 text-center mb-4">-->
<!--            <a class="btn" href="review_list.php?wp_hp_field=04" style="color:black">-->
<!--                <i class="fa fa-shopping-cart fa-5x" aria-hidden="true"></i>-->
<!--            </a>-->
<!--            <div class="card-body">-->
<!--                <p class="card-text">쇼핑몰</p>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--        <div class="h4 col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center mb-4">-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<? include("footer.php"); ?>
</body>
</html>