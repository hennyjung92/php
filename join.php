<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>register</title>
    <? include("head.php"); ?>
</head>

<body>
<? include("header.php"); ?>
<section class="py-5">
    <div class="container" style="padding-top:30px; padding-bottom:30px;">
        <h1 class="text-center">회원가입</h1>
    </div>
</section>
<div class="container">
    <div class="row">
<!--        <div class="col-lg-4"></div>-->
<!--        <div class="col-lg-4" style="padding-top:30px;">-->
<!--            <div class="jumbotron" style="padding-top:30px;">-->
<!--                <form method="post" action="joinAction.php">-->
<!--                    <h4 style="text-align:center">회원가입</h4><br>-->
<!--                    <div class="form-group">-->
<!--                        <input type="text" class="form-control" placeholder="아이디를 입력하세요." name="wp_hp_id">-->
<!--                    </div>-->
<!--                    <div class="form-group">-->
<!--                        <input type="password" class="form-control" placeholder="비밀번호를 입력하세요." name="wp_hp_password">-->
<!--                    </div>-->
<!--                    <div class="form-group">-->
<!--                        <input type="text" class="form-control" placeholder="이름을 입력하세요." name="wp_hp_name">-->
<!--                    </div>-->
<!--                    <div class="form-group">-->
<!--                        <input type="email" class="form-control" placeholder="이메일을 입력하세요." name="wp_hp_email">-->
<!--                    </div>-->
<!--                    <div class="form-group">-->
<!--                        <input type="tel" class="form-control" placeholder="휴대폰 번호를 입력하세요." name="wp_hp_tel"><br>-->
<!--                    </div>-->
<!--                    <input type="submit" class="btn btn-primary form-control" value="가입완료">-->
<!--                </form>-->
<!--            </div>-->
<!--        </div>-->
        <div class="col-lg-3 col-sm-3"></div>
        <div class="col-lg-6 col-sm-6">
        <form method="post" action="joinAction.php">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="아이디를 입력하세요." name="wp_hp_id">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="비밀번호를 입력하세요." name="wp_hp_password">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="이름을 입력하세요." name="wp_hp_name">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" placeholder="이메일을 입력하세요." name="wp_hp_email">
            </div>
            <div class="form-group">
                <input type="tel" class="form-control" placeholder="휴대폰 번호를 입력하세요." name="wp_hp_tel"><br>
            </div>
            <input type="submit" class="btn btn-primary form-control" value="가입완료">
        </form>
        </div>
        <div class="col-lg-3 col-sm-3"></div>
    </div>
</div>
<br><br><br>
<? include("footer.php"); ?>
</body>
</html>