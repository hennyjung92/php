<!DOCTYPE html>
<html>
    <title>Sign up</title>
    <? include("head.php"); ?>
<body>
<? include("header.php"); ?>
<section class="py-5">
    <div class="container" style="padding-top:30px; padding-bottom:30px;">
        <h1 class="jg text-center">Sign up</h1>
            </div>
</section>
<div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-2 col-sm-2 col-xs-3"></div>
        <div class="col-lg-4 col-md-8 col-sm-8 col-xs-6">
            <hr>
        <form method="post" action="joinAction.php">
            <div class="form-group">
                <label>ID</label>
                <input type="text" class="form-control" placeholder="Please enter your ID.(4-12 character & number)" name="wp_hp_id" minlength="4" maxlength="12" autofocus="">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Enter your password." name="wp_hp_password">
            </div>
            <div class="form-group">
                <label>Password Check</label>
                <input type="password" class="form-control" placeholder="Enter your password again." name="wp_hp_password_check">
            </div>
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter your name." name="wp_hp_name">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter your email." name="wp_hp_email">
            </div>
            <div class="form-group">
                <label>Tel</label>
                <input type="tel" class="form-control" placeholder="Enter your phone number." name="wp_hp_tel"><br>
            </div>
            <hr>
            <div class="text-center">
            <input type="submit" class="btn btn-outline-primary" value="Register">
            </div>
        </form>
        </div>
        <div class="col-lg-4 col-md-2 col-sm-2 col-xs-3"></div>
    </div>
</div>
<br><br><br>
<? include("footer.php"); ?>
</body>
</html>