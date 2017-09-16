<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>QNA</title>
    <? include("head.php"); ?>
    <script>
        function qnafield(){

        }
    </script>
</head>
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
<section class="py-5 bg-image-full" style="background-image: url('img/wallpaper1.jpg'); opacity:0.8 !important;">
    <!-- Put anything you want here! There is just a spacer below for demo purposes! -->
    <div style="height: 250px;"></div>
</section>
<section class="py-5">
</section>
<div class="container">
    <div class="row" style="padding-top:20px; padding-bottom:60px;">
        <div class="h4 col-lg-3 col-sm-3 text-center mb-4">
        </div>

        <div class="h4 col-lg-2 col-sm-2 text-center mb-4">
            <a class="btn" href="review_list.php?wp_hp_field=02" style="color:black">
                <i class="fa fa-map-marker fa-5x" aria-hidden="true"></i>
            </a>
            <div class="card-body">
                <p class="card-text">디바이스</p>
            </div>
        </div>

        <div class="h4 col-lg-2 col-sm-2 text-center mb-4">
            <a class="btn" href="review_list.php?wp_hp_field=03" style="color:black">
                <i class="fa fa-mobile fa-5x" aria-hidden="true"></i>
            </a>
            <div class="card-body">
                <p class="card-text">어플리케이션</p>
            </div>
        </div>

        <div class="h4 col-lg-2 col-sm-2 text-center mb-4">
            <a class="btn" href="review_list.php?wp_hp_field=04" style="color:black">
                <i class="fa fa-shopping-cart fa-5x" aria-hidden="true"></i>
            </a>
            <div class="card-body">
                <p class="card-text">쇼핑몰</p>
            </div>
        </div>

        <div class="h4 col-lg-3 col-sm-3 text-center mb-4">
        </div>
    </div>
</div>
<? include("footer.php"); ?>
</body>
</html>