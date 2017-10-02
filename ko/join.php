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
        <div class="col-lg-4 col-md-2 col-sm-2 col-xs-3"></div>
        <div class="col-lg-4 col-md-8 col-sm-8 col-xs-6">
            <hr>
            <form method="post" id="join_form">
            <div class="form-group">
                <label>아이디</label>
                <input type="text" class="form-control" placeholder="아이디를 입력하세요.(4-12자리 영문 및 숫자)" name="wp_hp_id" minlength="4" maxlength="12" autofocus="">
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
<!--            <input type="submit" class="btn btn-outline-primary" value="가입하기">-->
                <button type="button" id="join_button" name="join_button" class="btn btn-primary center-block">Register</button>
            </div>
        </form>
        </div>
        <div class="col-lg-4 col-md-2 col-sm-2 col-xs-3"></div>
    </div>
</div>
<br><br><br>
<script>
    $(document).ready(function(){
        $('#join_button').click(function(event){
            var wp_hp_id =$('input[name=wp_hp_id]').val();
            var wp_hp_password =$('input[name=wp_hp_password]').val();
            var wp_hp_password_check =$('input[name=wp_hp_password_check]').val();
            var wp_hp_name =$('input[name=wp_hp_name]').val();
            var wp_hp_email =$('input[name=wp_hp_email]').val();
            var wp_hp_tel =$('input[name=wp_hp_tel]').val();
            alert(wp_hp_id);
            if(wp_hp_id==''){
                alert("ID is required.");
                $('input[name=wp_hp_id]').focus();
            }
            else if(wp_hp_password==''){
                alert("password is required.");
                $('input[name=wp_hp_password]').focus();
            }
            else if(wp_hp_password_check==''){
                alert("please input your password again.");
                $('input[name=wp_hp_password_check]').focus();
            }
            else if(wp_hp_name==''){
                alert("name is required.");
                $('input[name=wp_hp_name]').focus();
            }
            else if(wp_hp_email==''){
                alert("email address is required.");
                $('input[name=wp_hp_email]').focus();
            }
            else if(wp_hp_tel==''){
                alert("phone number is required.");
                $('input[name=wp_hp_tel]').focus();
            }
            else{
                $.ajax({
                    url:"joinActionAjax.php",
                    method:"POST",
                    data:$('#join_form').serialize(),
                    success:function(data){
                        if(data==0){
                            alert("존재하는 아이디입니다. 다른 아이디를 입력해주세요.");
                            $('input[name=wp_hp_id]').focus();
                        }
                        else if(data==1){
                            alert("아이디는 영문 소/대문자와 숫자만 허용됩니다.");
                            $('input[name=wp_hp_id]').focus();
                        }
                        else if (data==2){
                            alert("비밀번호가 일치하지 않습니다. 다시 입력해주세요.");
                            $('input[name=wp_hp_password]').focus();
                        }
                        else{
                            alert("회원가입이 완료되었습니다.");
                            location.href="index.php";
                        }
                    }
                }); // ajax
            } // else
        });
    });
</script>

<? include("footer.php"); ?>
</body>
</html>