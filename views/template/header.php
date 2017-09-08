<%@ page language="java" contentType="text/html; charset=UTF-8"
pageEncoding="UTF-8"%>
<%@ page import="java.io.PrintWriter"%>
<script type="text/javascript">
    function management(){
        alert("통합관리시스템 페이지로 이동합니다.");
        alert("test: 홈으로 이동");
        location.href="${pageContext.request.contextPath}/index.jsp";
    }
</script>
<%
String userID = null; // 아이디 담김
if (session.getAttribute("userID") != null) {
userID = (String) session.getAttribute("userID"); // 세션 값 가져오기
}
%>
<!-- Navigation -->
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-faded fixed-top" style="background-color:white;" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="${pageContext.request.contextPath }/index.jsp"><img src="${pageContext.request.contextPath}/resources/img/whopet_logo.png" class="img-responsive" height="50"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <%if(userID == null){ %>
                <li class="nav-item">
                    <a class="nav-link" href="${pageContext.request.contextPath }/views/member/join.jsp">Join</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#myModal" data-toggle="modal" >Login</a>
                </li>
                <%} else { %>
                <li class="nav-item">
          <span class="nav-link">
          <%= userID %>님 로그인
          </span>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="${pageContext.request.contextPath}/logoutAction.jsp">Logout</a>
                </li>

                <%} %>

                <li class="nav-item">
                    <a class="nav-link" href="${pageContext.request.contextPath }/views/whopet/about.jsp">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="${pageContext.request.contextPath }/views/whopet/service.jsp">Services</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Community
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                        <a class="dropdown-item" href="${pageContext.request.contextPath }/views/whopet/notice.jsp">Notice</a>
                        <a class="dropdown-item" href="${pageContext.request.contextPath }/views/review/review_list.jsp">Review</a>
                        <a class="dropdown-item" href="${pageContext.request.contextPath }/views/whopet/gallery.jsp">Gallery</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Help
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                        <a class="dropdown-item" href="${pageContext.request.contextPath }/views/whopet/qna.jsp">Q&A</a>
                        <a class="dropdown-item" href="${pageContext.request.contextPath }/views/whopet/contact.jsp">Contact</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="management()"><i class="fa fa-cog" aria-hidden="true" style="padding-top:5px;"></i></a>
                </li>
            </ul>
        </div>
    </div>
</nav>

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
                <form class="form-signin" method="post" action="${pageContext.request.contextPath}/loginAction.jsp" style="padding-top:20px;">
                    <input type="text" class="form-control" placeholder="id" name="userID" maxlength="20" autofocus=""><br>
                    <input type="password" class="form-control" placeholder="password" name="userPassword" maxlength="20"><br><br>
                    <%-- <a href="${pageContext.request.contextPath}/member/find_id.do" class="forgot-password pull-right">forgot ID?</a><br>
                    <a href="${pageContext.request.contextPath}/member/find_password.do" class="forgot-password pull-right" >forgot Password?</a><br><br> --%>
                    <span style="text-align:center;"><input type="submit" class="btn btn-primary center-block" value="Login"></span>
                </form>
            </div>
            <div class="modal-footer" style="padding-right:220px;">
                <!--  <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Close</button> -->
            </div>
        </div>
    </div>
</div>