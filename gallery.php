<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>GALLERY</title>
    <? include("head.php"); ?>
</head>
<body>
<? include("header.php"); ?>
<section class="py-5 bg-image-full" style="background-image: url('img/boyanddog.jpg');background-repeat: no-repeat;
background-position: center center; background-attachment: fixed; opacity:0.8 !important;">
    <!-- Put anything you want here! There is just a spacer below for demo purposes! -->
    <div style="height: 250px;"></div>
</section>
<section id="weeklyPet" class="bg-light" style="padding-top:20px; padding-bottom:50px;">
    <section class="py-5">
        <div class="container">
            <h1 class="text-center font-italic" style="font-weight: 400;">Weekly Best Pet</h1>
        </div>
    </section>
    <div class="container" style="height:300px;">
        <div class="row">
            <div class="span4" style="float: none; margin: 0 auto; width:350px; height:350px;">
                <a href="#"><img class="card-img-top" src="img/dog10.jpg" alt=""></a>
                <a class="btn" href="#" style="color:white">
                    <i class="fa fa-heart" style="font-size:20px;color:red"><span> 551</span></i>
                </a>
            </div>
        </div>
    </div>
</section>

<section id="showMeYourPet" style="padding-top:20px; ">
    <section class="py-5">
        <div class="container" style="padding-bottom:20px;">
            <h2 class="text-center" style="font-weight: 400;">SHOW ME YOUR PET!</h2>
        </div>
    </section>
    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="h-200">
                    <a href="#"><img class="card-img-top" src="img/dog9.jpg" alt="" height="200"></a>
                </div>
                <div style="padding-top:10px; padding-bottom:10px;">
                    <i class="fa fa-heart" style="font-size:20px;color:red"><span> 101</span></i>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="h-200">
                    <a href="#"><img class="card-img-top" src="img/youngboy.png" alt="" height="200"></a>
                </div>
                <div style="padding-top:10px; padding-bottom:10px;">
                    <i class="fa fa-heart" style="font-size:20px;color:grey"><span> 107</span></i>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="h-200">
                    <a href="#"><img class="card-img-top" src="img/dog7.jpg" alt="" height="200"></a>
                </div>
                <div style="padding-top:10px; padding-bottom:10px;">
                    <i class="fa fa-heart" style="font-size:20px;color:red"><span> 90</span></i>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="h-200">
                    <a href="#"><img class="card-img-top" src="img/dog6.jpg" alt="" height="200"></a>
                </div>
                <div style="padding-top:10px; padding-bottom:10px;">
                    <i class="fa fa-heart" style="font-size:20px;color:grey"><span> 50</span></i>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="h-200">
                    <a href="#"><img class="card-img-top" src="img/dog5.jpg" alt="" height="200"></a>
                </div>
                <div style="padding-top:10px; padding-bottom:10px;">
                    <i class="fa fa-heart" style="font-size:20px;color:red"><span> 190</span></i>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="h-200">
                    <a href="#"><img class="card-img-top" src="img/dog4.jpg" alt="" height="200"></a>
                </div>
                <div style="padding-top:10px; padding-bottom:10px;">
                    <i class="fa fa-heart" style="font-size:20px;color:grey"><span> 333</span></i>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="h-200">
                    <a href="#"><img class="card-img-top" src="img/dog3.jpg" alt="" height="200"></a>
                </div>
                <div style="padding-top:10px; padding-bottom:10px;">
                    <i class="fa fa-heart" style="font-size:20px;color:red"><span> 200</span></i>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="h-200">
                    <a href="#"><img class="card-img-top" src="img/dog2.jpg" alt="" height="200"></a>
                </div>
                <div style="padding-top:10px; padding-bottom:10px;">
                    <i class="fa fa-heart" style="font-size:20px;color:grey"><span> 101</span></i>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="h-200">
                    <a href="#"><img class="card-img-top" src="img/dog1.jpg" alt="" height="200"></a>
                </div>
                <div style="padding-top:10px; padding-bottom:10px;">
                    <i class="fa fa-heart" style="font-size:20px;color:grey"><span> 102</span></i>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Pagination -->
<ul class="pagination justify-content-center" style="padding-bottom: 60px; padding-top:30px;">
    <li class="page-item">
        <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
        </a>
    </li>
    <li class="page-item">
        <a class="page-link" href="#">1</a>
    </li>
    <li class="page-item">
        <a class="page-link" href="#">2</a>
    </li>
    <li class="page-item">
        <a class="page-link" href="#">3</a>
    </li>
    <li class="page-item">
        <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
        </a>
    </li>
</ul>

<!-- </div> -->
<!-- /.container -->
<? include("footer.php"); ?>
</body>
</html>