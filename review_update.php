<%@ page language="java" contentType="text/html; charset=UTF-8"
pageEncoding="UTF-8"%>
<%@ page import ="java.io.PrintWriter" %>
<%@ page import = "bbs.Bbs" %>
<%@ page import = "bbs.BbsDAO" %>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>REVIEW UPDATE</title>
    <? include("head.php"); ?>
</head>
<body>
<? include("header.php"); ?>
<script type="text/javascript">
    function cancel(){
        location.href="views/review/review_list.jsp";
    }
</script>

<section class="py-5">
    <div class="container" style="padding-top:30px; padding-bottom:30px;">
        <h1 class="text-center display-4">Update</h1>
    </div>
</section>
<!-- Page Content -->
<div class="container">
    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-2 mb-2"></div>
        <!-- Map Column -->
        <div class="col-lg-8 mb-4">

            <form method="post" action="updateAction.jsp?bbsID=<%=bbsID%>">
                <div class="form-group">
                    <label>TITLE</label>
                    <input type="text" class="form-control" name="bbsTitle" maxlength="50" value="<%=bbs.getBbsTitle()%>">
                </div>
                <div class="form-group">
                    <label>CONTENTS</label>
                    <textarea class="form-control" name="bbsContent" rows="10" maxlength="2048"><%=bbs.getBbsContent() %></textarea>
                </div>
                <!--   <div class="form-group">
                <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                </div> -->
                <div class="text-center" style="padding-top:20px; padding-bottom:30px;">
                    <button type="button" class="btn btn-outline-danger" onclick="cancel()">Cancel</button>
                    <input type="submit" class="btn btn-outline-primary" value="Modify">
                    <!-- <button type="button" class="btn btn-outline-primary" onclick="register()">Register</button> -->
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