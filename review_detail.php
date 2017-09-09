<%@ page language="java" contentType="text/html; charset=UTF-8"
pageEncoding="UTF-8"%>
<%@ page import ="java.io.PrintWriter" %>
<%@ page import = "bbs.Bbs" %>
<%@ page import = "bbs.BbsDAO" %>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>REVIEW DETAIL</title>
    <? include("head.php"); ?>

</head>
<body>
<? include("header.php"); ?>

<section class="py-5">
    <div class="container" style="padding-top:30px; padding-bottom:30px;">
        <h1 class="text-center display-4">Detail View</h1>
    </div>
</section>
<!-- Page Content -->
<div class="container">
    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-2 mb-2"></div>
        <!-- Map Column -->
        <div class="col-lg-8 mb-4">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="form-group">
                        <label>TITLE</label>
                        <input type="text" class="form-control" name="wp_shopbbsTitle" maxlength="50" value="" readonly >
                    </div>
                    <div class="form-group">
                        <label>NAME</label>
                        <input type="text" class="form-control" name="wp_shopbbsTitle" maxlength="50" value="" readonly >
                    </div>
                    <div class="form-group">
                        <label>DATE</label>
                        <input type="text" class="form-control" name="wp_shopbbsTitle" maxlength="50" value="" readonly >
                    </div>
                    <div class="form-group">
                        <label>CONTENTS</label>
                        <textarea class="form-control" name="wp_shopbbsContent" rows="10" maxlength="2048" readonly ></textarea>
                    </div>

                </div>
                <div class="col-lg-2"></div>
            </div>
            <div class="text-center" style="padding-top:20px; padding-bottom:30px;">
                <a href="review_list.jsp" class="btn btn-outline-success">list</a>
                <a href="review_update_form.jsp?bbsID=<%=bbsID %>" class="btn btn-outline-primary">modify</a>
                <a href="../../deleteAction.jsp?bbsID=<%=bbsID %>" class="btn btn-outline-danger" onclick="return confirm('정말로 삭제하시겠습니까?')">delete</a>
                <% 	}
                %>
            </div>
            <div class="col-lg-2 mb-2"></div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</div>
<? include("footer.php"); ?>
</body>
</html>