<!DOCTYPE html>
<html>
    <title>SERVICE</title>
    <? include("./common/head.php"); ?>
<style>
    h1{
        font-family:'Kanit', sans-serif;
        font-weight:600;
        letter-spacing:-1px;
        font-size:40px;
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
            <div class="carousel-item active" style="background-image: url('../img/boyanddog3.jpg');height: 350px; opacity:0.8 !important;">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
            <!-- Slide Two - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('../img/boyanddog3.jpg');height: 350px; opacity:0.8 !important;">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
            <!-- Slide Three - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('../img/boyanddog3.jpg');height: 350px; opacity:0.8 !important;">
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

<section id="services" class="bg-light" style="padding-bottom:70px;">
    <section class="py-5">
        <div class="container">
            <h1 class="text-center">Services</h1>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 text-center">
                <i class="fa fa-map-o fa-2x" id="service_map" aria-hidden="true"></i>
                <p class="ns" style="font-size:15px; padding-top: 30px;">Track your indoors, outdoors, ground and underground location<br>in real time</p>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 text-center">
                <i class="fa fa-bar-chart fa-2x" id="service_chart" aria-hidden="true"></i>
                <p class="ns" style="font-size:15px; padding-top: 30px;">Real-time loss<br>prevention & statistics</p>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 text-center">
                <i class="fa fa-sign-out fa-2x" id="service_signout" aria-hidden="true"></i>
                <p class="ns" style="font-size:15px; padding-top: 30px;">Identify my real-time location <br>& disaster evacuation routes</p>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 text-center">
                <i class="fa fa-cog fa-2x" id="service_cog" aria-hidden="true"></i>
                <p class="ns" style="font-size:15px; padding-top: 30px;">My pet's location and status management function<br> via mobile app and PC web</p>
            </div>
        </div>
    </div>
</section>

<section id="serviceSystem" style="padding-top:10px; padding-bottom:60px;">
    <!-- Marketing Icons Section -->
    <section class="py-5">
        <div class="container" style="padding-bottom:10px;">
            <h1 class="text-center">Service System</h1>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-6 text-center" style="float: none; margin: 0 auto;">
                <h2 class="text-center">
                    <img src="../img/management_en.png" class="img-fluid">
                </h2>
            </div>
        </div>
        <!-- /.row -->
    </div>
</section>

<section id="forWhom" class="bg-light" style="padding-top:10px; padding-bottom:90px;">
    <section class="py-5">
        <div class="container" style="padding-bottom:20px;">
            <h1 class="text-center">For Whom?</h1>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="h4 col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center">
                <i class="fa fa-shopping-basket fa-5x" aria-hidden="true" style="padding-bottom:20px;"></i>
                <p class="ns" style="font-size: 15px;">Pet Shop</p>
            </div>
            <div class="h4 col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center">
                <i class="fa fa-hospital-o fa-5x" aria-hidden="true" style="padding-bottom:20px;"></i>
                <p class="ns" style="font-size: 15px;">Animal Hospital</p>
            </div>
            <div class="h4 col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center">
                <i class="fa fa-users fa-5x" aria-hidden="true" style="padding-bottom:20px;"></i>
                <p class="ns" style="font-size: 15px;">Pet Owners</p>
            </div>
        </div>
    </div>
</section>

<section id="device" style=" padding-bottom:30px; text-align: center;">
    <section class="py-5">
        <div class="container">
            <h1 class="text-center">Device</h1>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-xs-4 portfolio-item">
                <div class="h-200">
                    <p><img src="../img/device/whopet.png" class="img-responsive" style="width:70%;"></p>
                    <p><img src="../img/device/whopet_open.png" class="img-responsive" style="width:70%;"></p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-4 portfolio-item">
                <div class="h-200">
                    <img src="../img/whopet_ring.png" class="img-responsive" style="width:90%">
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-4 portfolio-item">
                <div class="h-200">
                    <img src="../img/device/whopet_dog_neckbelt.png" class="img-responsive" style="width:70%">
                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->
</section>
<? include("./common/footer.php"); ?>
</body>
</html>