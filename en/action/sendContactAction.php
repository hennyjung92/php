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
        died('We are sorry, but there appears to be a problem with the form you submitted.');
    }

    $name = $_POST['name']; // required
    $email = $_POST['email']; // required
    $subject = $_POST['subject']; // required
    $message = $_POST['message']; // not required

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

    if(!preg_match($email_exp,$email)) {
        $error_message .= 'The Email Address you entered does not appear to be valid.';
    }

    $string_exp = "/^[A-Za-z .'-]+$/";

    if(!preg_match($string_exp,name)) {
        $error_message .= 'The Name you entered does not appear to be valid.';
    }

    if(!preg_match($string_exp,subject)) {
        $error_message .= 'The Subject you entered does not appear to be valid.';
    }

    if(strlen(message) < 2) {
        $error_message .= 'The Comments you entered do not appear to be valid.';
    }

    if(strlen($error_message) > 0) {
        died($error_message);
    }

    $email_message = "Form details below.\n\n";

    function clean_string($string) {
        $bad = array("content-type","bcc:","to:","cc:","href");
        return str_replace($bad,"",$string);
    }

    $email_message .= "Company / Name: ".clean_string($name)."\n";
    $email_message .= "Email: ".clean_string($email)."\n";
    $email_message .= "Subject: ".clean_string($subject)."\n";
    $email_message .= "Message: ".clean_string($message)."\n";

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
            window.alert('Thank you for contacting us. We will be in touch with you very soon.');
            location.href='../../en/contact.php'; 
        </script>";
}
?>

