<?
include("db_connect.php");
$connect = dbconn();
$wp_hp_member = member();
?>

<script type="text/javascript">
    function management(){
        alert("Go to the Integrated Management System page.");
        location.href="index.php";
    }
    function mypage(){
        alert("Go to MyPage");
        location.href="index.php";
    }
</script>

<style>
    @import url(//fonts.googleapis.com/earlyaccess/nanumpenscript.css);
    @import url(//fonts.googleapis.com/earlyaccess/hanna.css);
    @import url(//fonts.googleapis.com/earlyaccess/jejugothic.css);
    @import url(//fonts.googleapis.com/earlyaccess/jejuhallasan.css);
    @import url(//fonts.googleapis.com/earlyaccess/jejumyeongjo.css);
    @import url(//fonts.googleapis.com/earlyaccess/kopubbatang.css);
    @import url(//fonts.googleapis.com/earlyaccess/nanumbrushscript.css);
    @import url(//fonts.googleapis.com/earlyaccess/nanumgothic.css);
    @import url(//fonts.googleapis.com/earlyaccess/nanumgothiccoding.css);
    @import url(//fonts.googleapis.com/earlyaccess/nanummyeongjo.css);
    @import url(//fonts.googleapis.com/earlyaccess/notosanskr.css);
    /*p,h1 { font-family: 'Nanum Pen Script', cursive; }*/
    /*p { font-size: 24px; }*/
    .hn { font-family: 'Hanna'; }
    .jg { font-family: 'Jeju Gothic'; }
    .jh { font-family: 'Jeju Hallasan'; }
    .jm { font-family: 'Jeju Myeongjo'; }
    .kb { font-family: 'Kopub Batang'; }
    .nbs { font-family: 'Nanum Brush Script'; }
    .ng { font-family: 'Nanum Gothic', sans-serif; }
    .ngc { font-family: 'Nanum Gothic Coding', monospace; }
    .nm { font-family: 'Nanum Myeongjo',Serif; }
    .nps { font-family: 'Nanum Pen Script'; }
    .ns { font-family: 'Noto Sans KR', sans-serif; }
</style>

<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-faded fixed-top" style="background-color:white;" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="index.php"><img src="../img/whopet_logo.png" class="img-responsive" height="50"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="about.php">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="service.php">SERVICES</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        COMMUNITY
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">

                        <a class="dropdown-item" href="notice_list.php?wp_hp_field=05">NOTICE</a>
                        <a class="dropdown-item" href="review_list.php?wp_hp_field=01">REVIEW</a>
                        <a class="dropdown-item" href="gallery.php">GALLERY</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        HELP
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                        <a class="dropdown-item" href="qna.php">Q&A</a>
                        <a class="dropdown-item" href="contact.php">CONTACT</a>
                    </div>
                </li>
                <!--                <li class="nav-item">-->
                <!--                    <a class="nav-link" href="#" onclick="management()"><i class="fa fa-cog" aria-hidden="true" style="padding-top:5px;"></i></a>-->
                <!--                </li>-->
                <?
                session_start();
                $wp_hp_member[wp_hp_id] = $_SESSION['wp_hp_id'];
                if($wp_hp_member[wp_hp_id]){?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-user-circle" aria-hidden="true"></i>
                            <? echo $wp_hp_member[wp_hp_id]; ?>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                            <a class="dropdown-item" href="#" onclick="management()"><i class="fa fa-cog" aria-hidden="true"> management</i></a>
                            <a class="dropdown-item" href="logout.php" onclick="return confirm('로그아웃 하시겠습니까?')"><i class="fa fa-sign-out" aria-hidden="true"> logout</i></a>
                        </div>
                    </li>
                <? }
                else{ ?>
                    <li class="nav-item">
                        <a class="nav-link" href="join.php"><i class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#myModal" name="login" id="login" data-toggle="modal"><i class="fa fa-circle-o-notch" aria-hidden="true"></i></a>
<!--                        <a><button type="button" name="login" id="login" class="btn btn-success" data-toggle="modal" data-target="#myModal"><i class="fa fa-circle-o-notch" aria-hidden="true"></i></button> </a>-->
                    </li>
                <? } ?>
            </ul>
        </div>
    </div>
</nav>

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog" style="text-align:center;">
    <div class="modal-dialog" style="width:350px;">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h5 class="modal-title">Welcome to WHOPET!</h5>
            </div>
            <div class="modal-body">
<!--                <form class="form-signin" method="post" action="loginActionAjax.php" style="padding-top:20px;">-->
                    <input type="text" class="form-control" placeholder="아이디를 입력해주세요" name="wp_hp_id" id="wp_hp_id" maxlength="20" autofocus=""><br>
                    <input type="password" class="form-control" placeholder="비밀번호를 입력해주세요" name="wp_hp_password" id="wp_hp_password" maxlength="20"><br><br>
<!--                    <span style="text-align:center;"><input type="submit" class="btn btn-primary center-block" value="Login"></span>-->
                    <span style="text-align:center;"><button type="button" id="login_button" name="login_button" class="btn btn-primary center-block">Login</button></span>
<!--                </form>-->
            </div>
            <div class="modal-footer" style="padding-right:220px;">
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        $('#login_button').click(function(){
            var wp_hp_id =$('#wp_hp_id').val();
            var wp_hp_password =$('#wp_hp_password').val();
            if(wp_hp_id!='' && wp_hp_password!=''){
                $.ajax({
                    url:"loginActionAjax.php",
                    method:"POST",
                    data:{wp_hp_id:wp_hp_id, wp_hp_password:wp_hp_password},
                    success:function(data){
                        alert(data);
                        if(data==0){
                            alert("아이디와 비밀번호가 일치하지 않습니다. 다시 입력해주세요.");
                            $('#wp_hp_id').focus();
                        }
                        else{
                            alert("whopet에 오신 것을 환영합니다!");
                            location.href="index.php";
                        }
                    }
                });
            }
            else{
                alert("both fields are required!");
                $('#wp_hp_id').focus();
            }
        });
    });

</script>
