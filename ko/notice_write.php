<!DOCTYPE html>
<html>
    <title>WHOPET - Notice</title>
    <? include("./common/head.php"); ?>
<body>
<? include("./common/header.php"); ?>
<? if(!$wp_hp_member[wp_hp_id])Error("로그인 후 이용해주세요.");
$wp_hp_field = $_GET[wp_hp_field];
?>

<script type="text/javascript">
    function cancel() {
        location.href = "notice_list.php?wp_hp_field=<?=$wp_hp_field?>";
    }
</script>

<section class="py-5">
    <div class="container" style="padding-top:30px; padding-bottom:30px;">
        <h1 class="text-center display-4">Write</h1>
    </div>
</section>
<!-- Page Content -->
<div class="container">
    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-2 mb-2"></div>
        <!-- Map Column -->
        <div class="col-lg-8 mb-4">

            <form method="post" action="./action/noticeWriteAction.php" enctype="multipart/form-data">
                <input type="hidden" name="wp_hp_field" value="<?=$wp_hp_field?>">
                <div class="form-group">
                    <label>ID</label>
                    <input type="text" class="form-control" name="wp_hp_member_id" value="<?=$wp_hp_member[wp_hp_id]?>" readonly="readonly">
                </div>
                <div class="form-group">
                    <label>TITLE</label>
                    <input type="text" class="form-control" name="wp_hp_review_title" maxlength="50" autofocus="autofocus">
                </div>
                <div class="form-group">
                    <label>Short description</label>
                    <textarea class="form-control" name="wp_hp_review_summary" rows="5" maxlength="1024"></textarea>
                </div>
                <div class="form-group">
                    <label>CONTENTS</label>
                    <textarea class="form-control" name="wp_hp_review_content" rows="10" maxlength="2048"></textarea>
                </div>
                <div class="form-group">
                    <input type="file" class="form-control-file" name="file01">
                </div>
                <div class="text-center" style="padding-top:20px; padding-bottom:30px;">
                    <button type="button" class="btn btn-outline-danger" onclick="cancel()">Cancel</button>
                    <input type="submit" class="btn btn-outline-primary" value="Register">
                </div>
            </form>

        </div> <!-- Contact Details Column -->
        <div class="col-lg-2 mb-2"></div>
    </div>
    <!-- /.row -->
</div>
<!-- /.container -->
<? include("./common/footer.php"); ?>
</body>
</html>