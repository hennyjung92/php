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
            <form name="sentMessage" id="contactForm" method="post" action="../ko/action/sendContactAction.php" novalidate>
                <div class="control-group form-group">
                    <div class="controls">
                        <input type="text" class="form-control" name="name" placeholder="회사 / 이름" autofocus="autofocus">
                        <p class="help-block"></p>
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <input type="email" class="form-control" name="email" placeholder="이메일">
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <input type="text" class="form-control" name="subject" placeholder="제목">
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <textarea name="message" cols="100" rows="10" class="form-control" style="resize:none" onKeyUp="javascript:fnChkByte(this,'1000')"></textarea>
                        <span id="byteInfo">0</span>/500자
                    </div>
                </div>
                <div id="success"></div>
                <!-- For success/fail messages -->
                <button type="submit" class="btn btn-outline-primary pull-right">문의하기</button>
            </form>
        </div>
        <div class="col-lg-2 mb-2"></div>
    </div>
    <!-- /.row -->
    <script>
        function fnChkByte(obj, maxByte){
            var str = obj.value;
            var str_len = str.length;

            var rbyte = 0;
            var rlen = 0;
            var one_char = "";
            var str2 = "";

            for(var i=0; i<str_len; i++){
                one_char = str.charAt(i);
                if(escape(one_char).length > 4){
                    rbyte += 2;                                         //한글2Byte
                }else{
                    rbyte++;                                            //영문 등 나머지 1Byte
                }

                if(rbyte <= maxByte){
                    rlen = i+1;                                          //return할 문자열 갯수
                }
            }

            if(rbyte > maxByte){
                alert("한글 "+(maxByte/2)+"자 / 영문 "+maxByte+"자를 초과 입력할 수 없습니다.");
                str2 = str.substr(0,rlen); //문자열 자르기
                obj.value = str2;
                fnChkByte(obj, maxByte);
            }else{
                document.getElementById('byteInfo').innerText = rbyte;
            }
        }
    </script>
</div>
<!-- /.container -->
<<? include("./common/footer.php"); ?>
</body>
</html>