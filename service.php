<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>SERVICE</title>
    <? include("head.php"); ?>
</head>
<style>
    h1{
        font-family:'Kanit', sans-serif;
        font-weight:500;
        letter-spacing:-1px;
        font-size:40px;
    }
</style>
<body>
<? include("header.php"); ?>
<section class="py-5 bg-image-full" style="background-image: url('img/boyanddog3.jpg');background-repeat: no-repeat;
background-position: center center; background-attachment: fixed; opacity:0.8 !important;">
    <div style="height: 250px;"></div>
</section>

<section id="services" class="bg-light" style="padding-bottom:70px;">
    <section class="py-5">
        <div class="container">
            <h1 class="text-center">Services</h1>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            </div>
            <div class="col-lg-3 col-sm-6 text-center mb-4">
                <br>
                <i class="fa fa-map-o fa-2x" id="service_map" aria-hidden="true"></i>
            </div>
            <div class="col-lg-3 col-sm-6 text-center mb-4 my-4">
                <br><br>
                <h3>
                    <!--   <small>Title</small> -->
                </h3>
                <p class="ns" style="font-size:15px;">실시간 실내외, 지상, 지하<br>범위 제한 없이 위치 추적</p>
            </div>

            <div class="col-lg-3 col-sm-6 text-center mb-4">
                <br>
                <i class="fa fa-bar-chart fa-2x" id="service_chart" aria-hidden="true"></i>
            </div>
            <div class="col-lg-3 col-sm-6 text-center mb-4 my-4">
                <br><br>
                <h3>
                    <!-- <small>Title</small> -->
                </h3>
                <p class="ns" style="font-size:15px;">실시간 분실 방지 및 통계</p>
            </div>
            <div class="col-lg-3 col-sm-6 text-center mb-4">
                <i class="fa fa-sign-out fa-2x" id="service_signout" aria-hidden="true"></i>
            </div>
            <div class="col-lg-3 col-sm-6 text-center mb-4 my-4">
                <h3>
<!--                      <small>Title</small>-->
                    <br>
                </h3>
                <p class="ns" style="font-size:15px;">실시간 나의 위치 및<br>재난 대피 경로 파악</p>
            </div>
            <div class="col-lg-3 col-sm-6 text-center mb-4">
                <i class="fa fa-cog fa-2x" id="service_cog" aria-hidden="true"></i>
            </div>
            <div class="col-lg-3 col-sm-6 text-center mb-4 my-4">
                <br>
                <h3>
<!--                      <small>Title</small>-->
                </h3>
                <p class="ns" style="font-size:15px;">Mobile App, PC Web을 통한<br>내 애완동물 위치 파악 및 상태 관리 기능</p>
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
            <div class="span3" style="float: none; margin: 0 auto;">
                <h2 class="text-center">
                    <img src="img/servicesystem.png" class="img-responsive">
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
            <div class="h4 col-lg-4 col-sm-4 text-center mb-4">
                <i class="fa fa-shopping-basket fa-4x" aria-hidden="true" style="padding-bottom:20px; padding-top:15px;"></i>
                <p class="ns" style="font-size: 15px;">애견샵</p>
            </div>
            <div class="h4 col-lg-4 col-sm-4 text-center mb-4">
                <i class="fa fa-hospital-o fa-5x" aria-hidden="true" style="padding-bottom:20px;"></i>
                <p class="ns" style="font-size: 15px;">동물병원</p>
            </div>
            <div class="h4 col-lg-4 col-sm-4 text-center mb-4">
                <i class="fa fa-users fa-5x" aria-hidden="true" style="padding-bottom:20px;"></i>
                <p class="ns" style="font-size: 15px;">반려동물 주인</p>
            </div>
        </div>
    </div>
</section>

<section id="device" style=" padding-bottom:30px;">
    <section class="py-5">
        <div class="container">
            <h1 class="text-center">Device</h1>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 portfolio-item">
                <div class="h-200">
                    <a href="#"><img src="img/whopet_ring.png" class="img-responsive" style="padding-left: 100px; padding-bottom:36px; width:80%"></a>
                </div>
            </div>
            <div class="col-lg-6 portfolio-item">
                <div class="h-200">
                    <a href="#"><img src="img/dogneckbelt.png" class="img-responsive" style="padding-left: 100px; width:70%"></a>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->
</section>
<? include("footer.php"); ?>
</body>
</html>