<!DOCTYPE html>
<html>
    <title>WHOPET - Contact us</title>
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
                경기도 성남시 분당구 판교로 255 이노밸리 C동
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
                <i class="fa fa-clock-o" aria-hidden="true"></i> 월-금 : 9:00 - 18:00
            </p>
        </div>
        <div class="col-lg-4 mb-4">
            <form name="sentMessage" id="contactForm" novalidate>
                <div class="control-group form-group">
                    <div class="controls">
                        <input type="text" class="form-control" id="name" placeholder="이름" autofocus="autofocus">
                        <p class="help-block"></p>
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <input type="tel" class="form-control" id="phone" placeholder="이메일">
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <input type="email" class="form-control" id="email" placeholder="제목">
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <textarea rows="10" cols="100" class="form-control" id="message" placeholder="메세지를 입력해주세요." maxlength="999" style="resize:none"></textarea>
                    </div>
                </div>
                <div id="success"></div>
                <!-- For success/fail messages -->
                <button type="submit" class="btn btn-outline-primary pull-right">전송</button>
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