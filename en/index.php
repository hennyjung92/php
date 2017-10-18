<!DOCTYPE html>
<html>
<title>WHOPET</title>
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
                    <p class="ns" style="font-weight: 700;">Meeting of companion animal and IOT</p>
                    <p class="ns" style="font-size: 15px;">WHOPET is a companion animal tracking and care solution
                        that can track location in indoor, outdoor, ground and underground in real time,
                        precisely track the position of companion animal in smartphone and PC
                        at the same time in real time using Cloud server.
                    </p>
                    <!--                    <p class="hn">글씨체 테스트 1</p>-->
                    <!--                    <p class="jg">글씨체 테스트 2</p>-->
                    <!--                    <p class="jh">글씨체 테스트 3</p>-->
                    <!--                    <p class="jm">글씨체 테스트 4</p>-->
                    <!--                    <p class="kb">글씨체 테스트 5</p>-->
                    <!--                    <p class="nbs">글씨체 테스트 6</p>-->
                    <!--                    <p class="ng">글씨체 테스트 7</p>-->
                    <!--                    <p class="ngc">글씨체 테스트 8</p>-->
                    <!--                    <p class="nm">글씨체 테스트 9</p>-->
                    <!--                    <p class="nps">글씨체 테스트 10</p>-->
                    <!--                    <p class="ns">글씨체 테스트 11</p>-->
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
                        <h2 class="ns" style="font-size: 17px;font-weight: 700;">Prevent Lost</h2>
                        <p class="ns" style="font-size: 15px;">
                            If pet is 100 meters away from your smartphone,<br>you will receive<br>an alert & message!
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="hovereffect">
                    <img class="img-fluid" src="../img/direction.png" style="height:250px;" alt="">
                    <div class="overlay">
                        <h2 class="ns" style="font-size: 17px;font-weight: 700;">Notification of route</h2>
                        <p class="ns" style="font-size: 15px;">
                            Provide data about<br>pet's moving route<br>& stopping places
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="hovereffect">
                    <img class="img-fluid" src="../img/dogs.png" style="height:250px;" alt="">
                    <div class="overlay">
                        <h2 class="ns" style="font-size: 17px;font-weight: 700;">Multiple management</h2>
                        <p class="ns" style="font-size: 15px;">
                            If you have many pets,<br>you can manage all your pets<br>at the same time.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="hovereffect">
                    <img class="img-fluid" src="../img/vps.png" style="height:250px; width:250px;" alt="">
                    <div class="overlay">
                        <h2 class="ns" style="font-size: 17px;font-weight: 700;">Provide statistics</h2>
                        <p class="ns" style="font-size: 15px;">
                            Provides statistical data<br>such as pet meal time,<br>bedtime<br>and travel time management
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
                        <p class="ns" style="font-weight: 700;">Establishment of WHOPET Platform Control Center<p>
                        <p class="ns" style="font-size: 15px;">
                            Battery Level Check, WHOPET Shopping Mall, Device A/S Inquiry, Emergency Backup Service etc.
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