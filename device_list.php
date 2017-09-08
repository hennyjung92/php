<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>DEVICE LIST</title>
    <style type="text/css">
        a, a:hover{
            color:#000000;
            text-decoration: none;
        }
    </style>
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

<section class="py-5 bg-image-full" style="background-image: url('img/review.jpg');background-repeat: no-repeat;
background-position: bottom center; background-attachment: fixed; opacity:0.8 !important;">
    <!-- Put anything you want here! There is just a spacer below for demo purposes! -->
    <div style="height: 250px;"></div>
</section>

<section id="review">
    <section class="py-5">
        <div class="container">
            <h1 class="text-center" style="font-weight:400; letter-spacing:1px;">Review</h1>
        </div>
    </section>

    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-sm-2">
            </div>
            <div class="col-lg-8 col-sm-8">
                <table class="table table-hover" style="text-align:center;">
                    <thead class="thead-default" >
                    <tr>
                        <th style="text-align:center;">No</th>
                        <th style="text-align:center;">Title</th>
                        <th style="text-align:center;">ID</th>
                        <th style="text-align:center;">Date</th>
                    </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td></td>
                            <td><a href="#"></a></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <%
                        }
                        %>
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="text-center">
                            <a href="#" class="btn btn btn-arrow-center"><i class="fa fa-chevron-left" aria-hidden="true" style="color:black;"></i>
                            </a>
                            <a href="#" class="btn btn btn-arrow-center"><i class="fa fa-chevron-right" aria-hidden="true" style="color:black;"></i></a>
                        </div>
                        <a href="#" class="btn btn-outline-primary pull-right">Write</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-sm-2"></div>
        </div>
    </div>
    <br><br><br><br><br>
</section>
<? include("footer.php"); ?>
</body>
</html>