
<?
include("db_connect.php");
$connect = dbconn();
$wp_hp_member = member();
?>

<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-faded fixed-top" style="background-color:white;" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="index.php"><img src="img/whopet_logo.png" class="img-responsive" height="50"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="service.php">Services</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Community
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">

                        <a class="dropdown-item" href="notice.php">Notice</a>
                        <a class="dropdown-item" href="review_list.php?wp_hp_field=01">Review</a>
                        <a class="dropdown-item" href="gallery.php">Gallery</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Help
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                        <a class="dropdown-item" href="qna.php">Q&A</a>
                        <a class="dropdown-item" href="contact.php">Contact</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="management()"><i class="fa fa-cog" aria-hidden="true" style="padding-top:5px;"></i></a>
                </li>

                <? if($wp_hp_member[wp_hp_id]){?>
                    <li class="nav-item" style="padding-left: 40px;">
                    <a class="nav-link" href="#" onclick="mypage()"><i class="fa fa-user-circle" aria-hidden="true"></i>
                    <? echo $wp_hp_member[wp_hp_id]."님"; ?>
                    </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php" onclick="return confirm('로그아웃 하시겠습니까?')"><i class="fa fa-sign-out fa-lg" aria-hidden="true"></i></a>
                    </li>
               <? }
                else{ ?>
                                    <li class="nav-item" style="padding-left: 40px;">
                                        <a class="nav-link" href="join.php"><font size="2px;">Sign in</font></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#myModal" data-toggle="modal" ><i class="fa fa-circle-o-notch" aria-hidden="true"></i></a>
                                    </li>
                <? } ?>
            </ul>
        </div>
    </div>
<!--    <ul style="list-style: none; padding-right: 30px; padding-top: 10px;">-->
<!--        <li style="display: block;"><a href=“#”><img src="img/flag_ko.png" class="img-responsive"></a></li>-->
<!--        <li style="display: block;"><a href=“#”><img src="img/flag_en.png" class="img-responsive"></a></li>-->
<!--    </ul>-->
</nav>

<script type="text/javascript">
    function management(){
        alert("통합관리시스템 페이지로 이동합니다.");
        location.href="index.php";
    }
    function mypage(){
        alert("마이페이지로 이동");
        location.href="index.php";
    }
</script>
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog" style="text-align:center;">
    <div class="modal-dialog" style="width:400px;">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h5 class="modal-title">Welcome to WHOPET!</h5>
            </div>
            <div class="modal-body">
                <form class="form-signin" method="post" action="loginAction.php" style="padding-top:20px;">
                    <input type="text" class="form-control" placeholder="아이디를 입력하세요." name="wp_hp_id" maxlength="20" autofocus=""><br>
                    <input type="password" class="form-control" placeholder="비밀번호를 입력하세요." name="wp_hp_password" maxlength="20"><br><br>
                    <span style="text-align:center;"><input type="submit" class="btn btn-primary center-block" value="Login"></span>
                </form>
            </div>
            <div class="modal-footer" style="padding-right:220px;">
                <!--  <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Close</button> -->
            </div>
        </div>
    </div>
</div>
