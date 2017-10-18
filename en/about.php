<!DOCTYPE html>
<html>
<title>ABOUT</title>
<? include("./common/head.php"); ?>
<style>
    p{
        font-family: 'Noto Sans KR', sans-serif;
    }
    .p-5 p, .py-5{
        line-height:1.8em;
        margin-top:10px;
    }
    h1{
        font-family:'Kanit', sans-serif;
        font-weight:500;
        letter-spacing:-1px;
        font-size:45px;
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
            <div class="carousel-item active" style="background-image: url('../img/boyanddog2.jpg');height: 350px; opacity:0.8 !important;">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
            <!-- Slide Two - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('../img/boyanddog2.jpg');height: 350px; opacity:0.8 !important;">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
            <!-- Slide Three - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('../img/boyanddog2.jpg');height: 350px; opacity:0.8 !important;">
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

<section class="py-5">
    <div class="container">
        <h1 class="text-center">Why Choose Us</h1>
        <p class="text-center" style="font-weight: 500;">"Difference between existing companion animal locator and WHOPET"</p>
    </div>
</section>
<section>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="p-5">
                    <img class="img-fluid rounded-circle" style="width:400px;" src="../img/underground.png" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="p-5">
                    <h2 class="display-4">Building</h2>
                    <p style="font-weight: 700;">Can be tracked in the basement & inside the building</p>
                    <p>
                    Previously, it was not possible to track the location in the basement and inside the building,
                    but WHOPET can track the exact location of the companion animal in the underground and inside the building.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="p-5">
                    <img class="img-fluid" src="../img/tracking.png" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="p-5">
                    <h2 class="display-4">Map</h2>
                    <p style="font-weight: 700;">Track on the map simultaneously with the connection</p>
                    <p>
                        If pet goes beyond a certain distance,
                        WHOPET provides notifications on the map as well as a tracking function
                        instead of a simple loss notification.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="p-5">
                    <img class="img-fluid" src="../img/usingpc.png" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="p-5">
                    <h2 class="display-4">PC Available</h2>
                    <p style="font-weight: 700;">Can trace to PC without smartphone</p>
                    <p>
                        In the past, location tracking service was not available without a smartphone,
                        but WHOPET can track the location on a PC without a smartphone.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<br><br>
<section>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="p-5">
                    <img class="img-fluid" src="../img/service.png" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="p-5">
                    <h2 class="display-4">Unlimited Service</h2>
                    <p style="font-weight: 700;">Provides unlimited service for device purchase</p>
                    <p>We provide unlimited service when purchasing device, not monthly payment after monthly subscription.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<br><br>
<? include("./common/footer.php"); ?>
</body>
</html>