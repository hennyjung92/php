<? header("content-type:text/html; charset=UTF-8");
    session_start();
    session_destroy();
?>
<script>
    window.alert("Logged out");
    location.href="index.php";
</script>
