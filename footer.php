<script type="text/javascript">
    function korean(){
        alert("한국어 홈페이지로 이동");
        location.href="index.php";
    }
    function english(){
        alert("영문판 홈페이지로 이동");
        alert("redirect로 이동시킬 것");
        location.href="index.php";
    }
</script>

<footer class="py-5 bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-3" style="padding-top:20px;">
                <a class="btn" href="https://www.facebook.com/" target="_blank" style="color:white">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a class="btn" href="https://www.instagram.com/" target="_blank" style="color:white">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
                <a class="btn" href="https://twitter.com/" target="_blank" style="color:white">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                <a class="btn" href="https://www.youtube.com/" target="_blank" style="color:white">
                    <i class="fa fa-youtube-play" aria-hidden="true"></i>
                </a>
<!--                <a href="#" style="padding-left:50px;" onclick="korean()"><img src="img/flag_ko.png" class="img-responsive"></a>-->
<!--                <a href="#" onclick="english()"><img src="img/flag_en.png" class="img-responsive"></a>-->
            </div>
            <div class="col-lg-3 col-sm-3" style="padding-left: 0px;">
                <a href="#" style="padding-left:50px;" onclick="korean()"><img src="img/flag_ko.png" class="img-responsive">Korean</a>
                <br>
                <a href="#" style="padding-left:50px;" onclick="english()"><img src="img/flag_ko.png" class="img-responsive">English</a>

            </div>
            <div class="col-lg-2 col-sm-2">
            </div>
            <div class="col-lg-4 col-sm-4">
                <p class="m-0 text-right text-white">82-70-7517-6246</p>
                <p class="m-0 text-right text-white">help@whopet.net</p>
                <p class="m-0 text-right text-white">Hyojung BD 4Floor 15-1,Seoul,Korea</p>
            </div>
        </div>
    </div>
</footer>