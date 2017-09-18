<!DOCTYPE html>
<html>
    <title>회원가입</title>
    <? include("head.php"); ?>
<body>
<? include("header.php"); ?>
<section class="py-5">
    <div class="container" style="padding-top:30px; padding-bottom:30px;">
        <h1 class="jg text-center">회원가입</h1>
    </div>
</section>
<div class="container">
    <div class="row">

        <div class="col-lg-4 col-sm-4"></div>
        <div class="col-lg-4 col-sm-4">
            <hr>
        <form method="post" action="joinAction.php">
            <div class="form-group">
                <label>아이디</label>
                <input type="text" class="form-control" placeholder="아이디를 입력하세요.(4-12자리 영문 및 숫자)" name="wp_hp_id" minlength="4" maxlength="12">
            </div>
            <div class="form-group">
                <label>비밀번호</label>
                <input type="password" class="form-control" placeholder="비밀번호를 입력하세요." name="wp_hp_password">
            </div>
            <div class="form-group">
                <label>비밀번호 확인</label>
                <input type="password" class="form-control" placeholder="비밀번호 다시 한번 더 입력하세요." name="wp_hp_password_check">
            </div>
            <div class="form-group">
                <label>이름</label>
                <input type="text" class="form-control" placeholder="이름을 입력하세요." name="wp_hp_name">
            </div>
            <div class="form-group">
                <label>이메일</label>
                <input type="email" class="form-control" placeholder="이메일을 입력하세요." name="wp_hp_email">
            </div>
            <div class="form-group">
                <label>휴대폰 번호</label>
                <input type="tel" class="form-control" placeholder="휴대폰 번호를 입력하세요." name="wp_hp_tel"><br>
            </div>
            <hr>
            <div class="text-center">
            <input type="submit" class="btn btn-outline-primary" value="가입하기">
            </div>
        </form>
        </div>
        <div class="col-lg-4 col-sm-4"></div>
    </div>
</div>
<br><br><br>
<? include("footer.php"); ?>
</body>
</html>