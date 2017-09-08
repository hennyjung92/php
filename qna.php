<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>ABOUT</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src=<"vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<? include("header.php"); ?>
<section class="py-5 bg-image-full" style="background-image: url('img/wallpaper1.jpg');background-repeat: no-repeat;
background-position: right center; background-attachment: fixed; opacity:0.8 !important;">
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
            <a class="btn" href="device_list.jsp" style="color:black">
                <i class="fa fa-map-marker fa-5x" aria-hidden="true"></i>
            </a>
            <div class="card-body">
                <p class="card-text" style="font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:20px; letter-spacing: 1px;">Device</p>
            </div>
        </div>
        <div class="h4 col-lg-2 col-sm-2 text-center mb-4">
            <a class="btn" href="app_list.jsp" style="color:black">
                <i class="fa fa-mobile fa-5x" aria-hidden="true"></i>
            </a>
            <div class="card-body">
                <p class="card-text" style="font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:20px; letter-spacing: 1px;">App</p>
            </div>
        </div>
        <div class="h4 col-lg-2 col-sm-2 text-center mb-4">
            <a class="btn" href="shop_list.jsp" style="color:black">
                <i class="fa fa-shopping-cart fa-5x" aria-hidden="true"></i>
            </a>
            <div class="card-body">
                <p class="card-text" style="font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:20px; letter-spacing: 1px;">Shop</p>
            </div>
        </div>
        <div class="h4 col-lg-3 col-sm-3 text-center mb-4">
        </div>
    </div>
</div>
<? include("footer.php"); ?>
</body>
</html>