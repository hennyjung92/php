<!DOCTYPE html>
<html>
    <title>CONTACT</title>
    <? include("./common/head.php"); ?>
<style>
    .container p{
        font-family: 'Noto Sans KR', sans-serif;
        font-size:15px;
        line-height:1.8em;
        margin-top:10px;
    }
</style>
<body>
<? include("./common/header.php"); ?>
<div class="container">
    <section class="py-5">
        <div class="container">
        </div>
    </section>
    <!-- Content Row -->
    <div class="container">
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4 portfolio-item">
                <div class="h-200">
                    <a href="#"><img src="../img/dogwithboy.jpg" class="img-responsive" style="padding-left: 100px; padding-bottom:36px; width:80%"></a>
                </div>
            </div>
            <div class="col-lg-4"></div>
        </div>
    </div>
    <!-- /.row -->
    <div class="row">
    </div>
    <!-- Contact Form -->
    <div class="row">
        <div class="col-lg-2 mb-2"></div>
        <div class="col-lg-4 mb-4">
            <p>
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                255, Pangyo-ro, Bundang-gu, Seongnam-si, Gyeonggi-do, Republic of Korea
                <br>
            </p>
            <p>
                <i class="fa fa-phone" aria-hidden="true"></i> 82-70-7517-6246
            </p>
            <p>
                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                <a href="mailto:name@example.com">help@whopet.net
                </a>
            </p>
            <p>
                <i class="fa fa-clock-o" aria-hidden="true"></i> Mon-Fri : 9:00 - 18:00
            </p>
        </div>
        <div class="col-lg-4 mb-4">
            <form name="sentMessage" id="contactForm" method="post" action="./action/sendContactAction.php" novalidate>
                <div class="control-group form-group">
                    <div class="controls">
                        <input type="text" class="form-control" id="name" placeholder="Name">
                        <p class="help-block"></p>
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <input type="email" class="form-control" id="phone" placeholder="Email">
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <input type="text" class="form-control" id="email" placeholder="Subject">
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <textarea rows="10" cols="100" class="form-control" name="message" placeholder="Message" maxlength="999" style="resize:none"></textarea>
                    </div>
                </div>
                <div id="success"></div>
                <!-- For success/fail messages -->
                <button type="submit" class="btn btn-outline-primary pull-right">Submit</button>
            </form>
        </div>
        <div class="col-lg-2 mb-2"></div>
    </div>
    <!-- /.row -->

</div>
<!-- /.container -->
<<? include("./common/footer.php"); ?>
</body>
</html>