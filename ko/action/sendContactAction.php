<?header("content-type:text/html; charset=UTF-8");

if(isset($_POST['email'])) {

    $email_to = "whopetdevelop01@gmail.com"; // 받는 메일 주소(회사측)
    $email_subject = "WHOPET Contact Us 메일"; // 메일 제목 설정

    function died($error) {
        echo "
        <script>
            window.alert('$error');
            history.back();
        </script>";
        die();
    }

    // validation expected data exists
    if(!isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['subject']) ||
        !isset($_POST['message'])) {
        died('메일을 전송에 문제가 발생하였습니다. 확인 후 다시 전송해주세요.');
    }

    $name = $_POST['name']; // required
    $email = $_POST['email']; // required
    $subject = $_POST['subject']; // required
    $message = $_POST['message']; // not required

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

    if(!preg_match($email_exp,$email)) {
        $error_message .= '올바르지 않은 이메일 주소입니다. 다시 입력해주세요.';
    }

    $string_exp = "/^[A-Za-z .'-]+$/";

    if(!preg_match($string_exp,name)) {
        $error_message .= '올바르지 않은 회사 / 이름 양식입니다. 다시 입력해주세요.';
    }

    if(!preg_match($string_exp,subject)) {
        $error_message .= '올바르지 않은 제목 양식입니다. 다시 입력해주세요.';
    }

    if(strlen(message) < 2) {
        $error_message .= '올바르지 않은 내용 양식입니다. 다시 입력해주세요.';
    }

    if(strlen($error_message) > 0) {
        died($error_message);
    }

    $email_message = "Form details below.\n\n";

    function clean_string($string) {
        $bad = array("content-type","bcc:","to:","cc:","href");
        return str_replace($bad,"",$string);
    }

    $email_message .= "회사 / 이름: ".clean_string($name)."\n";
    $email_message .= "이메일: ".clean_string($email)."\n";
    $email_message .= "제목: ".clean_string($subject)."\n";
    $email_message .= "내용: ".clean_string($message)."\n";

// create email headers
    $headers = 'From: '.$email."\r\n".
        'Reply-To: '.$email."\r\n" .
        'X-Mailer: PHP/' . phpversion();
    @mail($email_to, $email_subject, $email_message, $headers);
    ?>

    <!-- include your own success html here -->
    <!-- Thank you for contacting us. We will be in touch with you very soon.-->

    <?
        echo "
            <script>
            window.alert('문의 메일이 성공적으로 전송되었습니다.');
            location.href='../contact.php'; 
        </script>";
}
?>

