<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>register</title>
    <? include("head.php"); ?>
</head>

<body>
<? include("header.php"); ?>
<div class="container">
    <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4" style="padding-top:30px;">
            <div class="jumbotron" style="padding-top:30px;">
                <form method="post" action="joinAction.php">
                    <h4 style="text-align:center">JOIN</h4><br>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="아이디를 입력하세요." name="userID" maxlength="20">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="비밀번호를 입력하세요." name="userPassword" maxlength="20">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="이름을 입력하세요." name="userName" maxlength="20">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="이메일을 입력하세요." name="userEmail" maxlength="20"><br>
                    </div>
                    <div class="form-group">
                        <input type="tel" class="form-control" placeholder="휴대폰 번호를 입력하세요." name="userTel" maxlength="20"><br>
                    </div>
                    <input type="submit" class="btn btn-primary form-control" value="회원가입">
                </form>
            </div>
        </div>
    </div>
</div>
<? include("footer.php"); ?>
</body>
</html>