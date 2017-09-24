<!DOCTYPE html>
<html>
    <title>NOTICE WRITE</title>
    <? include("head.php"); ?>
<body>
<? include("header.php"); ?>
<? if(!$wp_hp_member[wp_hp_id])Error("로그인 후 이용해주세요.");
$wp_hp_field = $_GET[wp_hp_field];
?>
<script type="text/javascript" src="./smarteditor2/dist/js/service/HuskyEZCreator.js" charset="utf-8"></script>
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

            <form method="post" action="noticeWriteAction.php" enctype="multipart/form-data">
                <input type="hidden" name="wp_hp_field" value="<?=$wp_hp_field?>">
                <div class="form-group">
                    <label>ID</label>
                    <input type="text" class="form-control" name="wp_hp_id" value="<?=$wp_hp_member[wp_hp_id]?>" readonly="readonly">
                </div>
                <div class="form-group">
                    <label>TITLE</label>
                    <input type="text" class="form-control" name="wp_hp_review_title" maxlength="50">
                </div>
                <div class="form-group">
                    <label>Short description</label>
                    <textarea class="form-control" name="wp_hp_review_summary" rows="5" maxlength="1024"></textarea>
                </div>
                <div class="form-group">
                    <label>CONTENTS</label>
                    <textarea id ="ir1" class="form-control" name="wp_hp_review_content" rows="10" maxlength="2048"></textarea>
                    <script type="text/javascript">
                        var oEditors = [];

                        var sLang = "ko_KR";	// 언어 (ko_KR/ en_US/ ja_JP/ zh_CN/ zh_TW), default = ko_KR

                        // 추가 글꼴 목록
                        //var aAdditionalFontSet = [["MS UI Gothic", "MS UI Gothic"], ["Comic Sans MS", "Comic Sans MS"],["TEST","TEST"]];

                        nhn.husky.EZCreator.createInIFrame({
                            oAppRef: oEditors,
                            elPlaceHolder: "ir1",
                            sSkinURI: "./smarteditor2/dist/SmartEditor2Skin.html",
                            htParams : {
                                bUseToolbar : true,				// 툴바 사용 여부 (true:사용/ false:사용하지 않음)
                                bUseVerticalResizer : true,		// 입력창 크기 조절바 사용 여부 (true:사용/ false:사용하지 않음)
                                bUseModeChanger : true,			// 모드 탭(Editor | HTML | TEXT) 사용 여부 (true:사용/ false:사용하지 않음)
                                //bSkipXssFilter : true,		// client-side xss filter 무시 여부 (true:사용하지 않음 / 그외:사용)
                                //aAdditionalFontList : aAdditionalFontSet,		// 추가 글꼴 목록
                                fOnBeforeUnload : function(){
                                    //alert("완료!");
                                },
                                I18N_LOCALE : sLang
                            }, //boolean
                            fOnAppLoad : function(){
                                //예제 코드
                                //oEditors.getById["ir1"].exec("PASTE_HTML", ["로딩이 완료된 후에 본문에 삽입되는 text입니다."]);
                            },
                            fCreator: "createSEditor2"
                        });

                        function pasteHTML() {
                            var sHTML = "<span style='color:#FF0000;'>이미지도 같은 방식으로 삽입합니다.<\/span>";
                            oEditors.getById["ir1"].exec("PASTE_HTML", [sHTML]);
                        }

                        function showHTML() {
                            var sHTML = oEditors.getById["ir1"].getIR();
                            alert(sHTML);
                        }

                        function submitContents(elClickedObj) {
                            oEditors.getById["ir1"].exec("UPDATE_CONTENTS_FIELD", []);	// 에디터의 내용이 textarea에 적용됩니다.

                            // 에디터의 내용에 대한 값 검증은 이곳에서 document.getElementById("ir1").value를 이용해서 처리하면 됩니다.

                            try {
                                elClickedObj.form.submit();
                            } catch(e) {}
                        }

                        function setDefaultFont() {
                            var sDefaultFont = '궁서';
                            var nFontSize = 24;
                            oEditors.getById["ir1"].setDefaultFont(sDefaultFont, nFontSize);
                        }
                    </script>
                </div>



                <div class="form-group">
                    <input type="file" class="form-control-file" name="file01">
                </div>
                <div class="text-center" style="padding-top:20px; padding-bottom:30px;">
                    <button type="button" class="btn btn-outline-danger" onclick="cancel()">Cancel</button>
                    <input type="submit" class="btn btn-outline-primary" value="Register" onclick="submitContents()">
                </div>
            </form>

        </div> <!-- Contact Details Column -->
        <div class="col-lg-2 mb-2"></div>
    </div>
    <!-- /.row -->
</div>
<!-- /.container -->
<? include("footer.php"); ?>
</body>
</html>