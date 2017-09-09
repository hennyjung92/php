<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>MAIN</title>
    <? include("head.php"); ?>
</head>
<body>
<? include("header.php"); ?>
<header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <!-- Slide One - Set the background image for this slide in the line below -->
            <div class="carousel-item active" style="background-image: url(img/main.jpg);">
                <div class="carousel-caption d-none d-md-block">
                    <!-- <h3>First Slide</h3>
                    <p>This is a description for the first slide.</p> -->
                </div>
            </div>
            <!-- Slide Two - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url(img/dog1.jpg)">
                <div class="carousel-caption d-none d-md-block">
                    <!-- <h3>Second Slide</h3>
                    <p>This is a description for the second slide.</p> -->
                </div>
            </div>
            <!-- Slide Three - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url(img/dog4.jpg)">
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

<section id="aboutUs" class="bg-light" style=" padding-top:70px; padding-bottom:30px;">
    <!-- Marketing Icons Section -->
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="h-100">
                    <a href="#"><img class="card-img-top" src="img/maindog.png" style="width:250px;" alt=""></a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="h-100">
                    <a href="#"><img class="card-img-top" style="padding-top:100px; width:200px;" src="img/redbelt.png" alt=""></a>
                </div>
            </div>
            <div class="col-lg-4 mb-4">

                <div class="p-5">
                    <h2 class="display-4">WHOPET?</h2>
                    <p>Description about WHOPET</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>

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
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="hovereffect">
                    <img class="img-responsive" src="img/lost-dog.jpg" style="height:250px;" alt="">
                    <div class="overlay">
                        <h2>분실방지</h2>
                        <p>
                            short description
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="hovereffect">
                    <img class="img-responsive" src="img/direction.png" alt="">
                    <div class="overlay">
                        <h2>경로통보</h2>
                        <p>
                            short description
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="hovereffect">
                    <img class="img-responsive" src="img/dogs.png" style="height:250px;" alt="">
                    <div class="overlay">
                        <h2>다중관리</h2>
                        <p>
                            short description
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="hovereffect">
                    <img class="img-responsive" src="img/vps.png" style="height:250px; width:250px;" alt="">
                    <div class="overlay">
                        <h2>통계제공</h2>
                        <p>
                            short description
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
                        <img class="card-img-top rounded-circle" src="img/hugging.png" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-5">
                        <h2 class="display-4">CS Center</h2>
                        <p>24/7 Customer Service Support<p>
                        <p>consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
<? include("footer.php"); ?>
</body>
</html>