<!DOCTYPE html>
<html>
    <title>QNA</title>
    <? include("./common/head.php"); ?>
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
<? include("./common/header.php"); ?>

<header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <!-- Slide One - Set the background image for this slide in the line below -->
            <div class="carousel-item active" style="background-image: url('../img/wallpaper1.jpg');height: 350px; opacity:0.8 !important;">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
            <!-- Slide Two - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('../img/wallpaper1.jpg');height: 350px; opacity:0.8 !important;">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
            <!-- Slide Three - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('../img/wallpaper1.jpg');height: 350px; opacity:0.8 !important;">
                <div class="carousel-caption d-none d-md-block">
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

</section>
<div class="container">
    <div class="row" style="padding-top:80px; padding-bottom:80px;">
        <div class="col-lg-3">
        </div>
        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-4 text-center">
            <a class="btn" href="review_list.php?wp_hp_field=02" style="color:black">
                <i class="fa fa-map-marker fa-5x" aria-hidden="true"></i>
            </a>
            <p class="ns" style="font-size:15px; padding-top: 25px;">Device</p>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-4 text-center">
            <a class="btn" href="review_list.php?wp_hp_field=03" style="color:black">
                <i class="fa fa-mobile fa-5x" aria-hidden="true"></i>
            </a>
            <p class="ns" style="font-size:15px; padding-top: 25px;">App</p>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-4 text-center">
            <a class="btn" href="review_list.php?wp_hp_field=04" style="color:black">
                <i class="fa fa-shopping-cart fa-5x" aria-hidden="true"></i>
            </a>
            <p class="ns" style="font-size:15px; padding-top: 25px;">Shop</p>
        </div>
        <div class="col-lg-3">
        </div>
    </div>
</div>
<? include("./common/footer.php"); ?>
</body>
</html>