<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>NOTICE</title>
    <? include("head.php"); ?>
</head>
<body>
<? include("header.php"); ?>
<section id="notice">
    <section class="py-5">
        <div class="container" style="padding-top:30px; padding-bottom:30px;">
            <h1 class="text-center display-4" style="letter-spacing: 1px;">Notice & Events</h1>
        </div>
    </section>
    <!-- Page Content -->
    <div class="container">
        <!-- Project One -->
        <div class="row">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-fluid rounded mb-3 mb-md-0" src="img/dog1.jpg" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3 style="font-weight: 400;">Notice 1</h3>
                <p>lor sit amet, consectetur adipisicing elit. Explicabo, quidem, consectetur, officia rem  illum aliquam perspiciatis aspernatur quod modi hic nemo qui soluta aut eius fugit quam in suscipit?</p>
                <a class="btn btn-primary" href="#">View More
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Project Two -->
        <div class="row">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-fluid rounded mb-3 mb-md-0" src="img/dog2.jpg" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3 style="font-weight: 400;">Notice 2</h3>
                <p>lor sit amet, consectetur adipisicing elit. Explicabo, quidem, consectetur, officia rem  illum aliquam perspiciatis aspernatur quod modi hic nemo qui soluta aut eius fugit quam in suscipit?</p>
                <a class="btn btn-primary" href="#">View More
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Project Three -->
        <div class="row">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-fluid rounded mb-3 mb-md-0" src="img/dog3.jpg" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3 style="font-weight: 400;">Event 1</h3>
                <p>lor sit amet, consectetur adipisicing elit. Explicabo, quidem, consectetur, officia rem  illum aliquam perspiciatis aspernatur quod modi hic nemo qui soluta aut eius fugit quam in suscipit?</p>
                <a class="btn btn-primary" href="#">View More
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Project Four -->
        <div class="row">

            <div class="col-md-7">
                <a href="#">
                    <img class="img-fluid rounded mb-3 mb-md-0" src="img/dog5.jpg" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3 style="font-weight: 400;">Event 2</h3>
                <p>lor sit amet, consectetur adipisicing elit. Explicabo, quidem, consectetur, officia rem  illum aliquam perspiciatis aspernatur quod modi hic nemo qui soluta aut eius fugit quam in suscipit?</p>
                <a class="btn btn-primary" href="#">View More
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
        </div>
        <!-- /.row -->
        <hr>
        <!-- Pagination -->
        <ul class="pagination justify-content-center" style="padding-bottom:40px; padding-top:30px;">
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
        <a href="review_write.php?wp_hp_field=<?=$wp_hp_field?>" class="btn btn-outline-primary pull-right">Write</a>
    </div>
    <!-- /.container -->
    <? include("header.php"); ?>
</body>
</html>