<!DOCTYPE html>
<html>
<title>WHOPET - Welcome to WHOPET!</title>
<? include("./common/head.php"); ?>
<style>
    .p-5 p{
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
            <div class="carousel-item active" style="background-image: url(../../img/main.jpg);">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
            <!-- Slide Two - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url(../../img/dog1.jpg)">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
            <!-- Slide Three - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url(../../img/dog4.jpg)">
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

<section id="aboutUs" class="bg-light" style=" padding-top:70px; padding-bottom:30px;">
    <!-- Marketing Icons Section -->
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-xs-6 text-center">
                <div class="p-5">
                    <div class="h-100">
                        <img class="card-img-top" src="../img/maindog.png" style="width:250px;" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-xs-6 text-center">
                <div class="p-5">
                    <div class="h-100">
                        <img class="card-img-top" style="padding-top:100px; width:200px;" src="../img/redbelt.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-xs-6 text-center">
                <div class="p-5">
                    <h2 class="display-4">WHOPET?</h2>
                    <p class="ns" style="font-weight: 700;">반려동물과 IOT의 만남</p>
                    <p class="ns" style="font-size: 15px;">WHOPET은 반려동물 위치추적 및 케어 솔루션으로,
                        실시간으로 실내,외,지상,지하 어느 곳에서나 위치 추적이 가능하며<br>
                        Cloud 서버를 이용해 지구 어느 곳에서든 스마트폰,
                        PC에서 동시에 실시간으로 반려동물의 위치를 정밀 추적할 수 있는 플랫폼입니다.
                    </p>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
</section>

<section id="services" style="padding-top:20px; padding-bottom:70px; background-image:">
    <!-- Portfolio Section -->
    <section class="py-5">
        <div class="container">
            <h1 class="text-center display-4">Services</h1>
        </div>
    </section>
    <div class="container" style="padding-top:20px;">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="hovereffect">
                    <img class="img-fluid" src="../img/lost-dog.jpg" style="height:250px;" alt="">
                    <div class="overlay">
                        <h2 class="ns" style="font-size: 17px;font-weight: 700;">분실방지</h2>
                        <p class="ns" style="font-size: 15px;">
                            애완동물이 스마트폰으로부터<br>반경 100m 벗어날 경우<br>경보음과 알림 메세지 제공!
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="hovereffect">
                    <img class="img-fluid" src="../img/direction.png" style="height:250px;" alt="">
                    <div class="overlay">
                        <h2 class="ns" style="font-size: 17px;font-weight: 700;">경로통보</h2>
                        <p class="ns" style="font-size: 15px;">
                            애완동물 이동 경로 및<br>정지해있던 장소에 대한<br>데이터 제공
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="hovereffect">
                    <img class="img-fluid" src="../img/dogs.png" style="height:250px;" alt="">
                    <div class="overlay">
                        <h2 class="ns" style="font-size: 17px;font-weight: 700;">다중관리</h2>
                        <p class="ns" style="font-size: 15px;">
                            애완동물이 많을 경우<br>My pet 관리 메뉴에서<br>모든 애완동물 한꺼번에 관리
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="hovereffect">
                    <img class="img-fluid" src="../img/vps.png" style="height:250px; width:250px;" alt="">
                    <div class="overlay">
                        <h2 class="ns" style="font-size: 17px;font-weight: 700;"> 통계제공</h2>
                        <p class="ns" style="font-size: 15px;">
                            애완동물 식사시간, 취침시간,<br>이동시간 관리 등<br>통계 데이터 제공
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="cscenter" class="bg-light">
    <section>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="p-5">
                        <img class="card-img-top rounded-circle" src="../img/hugging.png" alt="">
                    </div>
                </div>
                <div class="col-md-6 text-center">
                    <div class="p-5">
                        <h2 class="display-4">CS Center</h2>
                        <p class="ns" style="font-weight: 700;">WHOPET 플랫폼 관제센터 구축<p>
                        <p class="ns" style="font-size: 15px;">배터리 잔량 체크, WHOPET 쇼핑몰, 디바이스 A/S 관련 문의,<br>비상 백업 서비스 등 제공
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
<? include("./common/footer.php"); ?>
</body>
</html>