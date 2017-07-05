<?php
// My modifications to mailer script from:
// http://blog.teamtreehouse.com/create-ajax-contact-form
// Added input sanitizing to prevent injection

// Only process POST reqeusts.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form fields and remove whitespace.
    $name = strip_tags(trim($_POST["name"]));
    $name = str_replace(array("\r","\n"),array(" "," "),$name);
    $whois = trim($_POST["whois"]);
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $tel = trim($_POST["tel"]);
    $contact_way = trim($_POST["contact-way"]);
    $message = trim($_POST["message"]);

    // Set the recipient email address.
    // FIXME: Update this to your desired email address.
    $recipient = "info@yuristi-volgograd.ru";

    // Set the email subject.
    $subject = "Новый запрос с сайта YURISTI-VOLGOGRAD.RU";

    // Build the email content.
    $email_content = "Имя или название организации: $name\n";
    $email_content .= "Я представляю: $whois\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Телефон: $tel\n";
    $email_content .= "Я предпочитаю, чтобы со мной связались: $contact_way\n";
    $email_content .= "Сообщение:\n$message\n";

    // Build the email headers.
    $headers = "From: $name <$email>\r\n";

    // getting the captcha
    $captcha = "";
    if (isset($_POST["g-recaptcha-response"]))
        $captcha = $_POST["g-recaptcha-response"];

    if (!$captcha)
        echo "Пожалуйста, подтвердите, что вы не робот";
    // handling the captcha and checking if it's ok
    $secret = "6LdZyRgUAAAAAGstyBqC54D0XYZk67jrE7nDHOgs";
    $response = json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$captcha."&remoteip=".$_SERVER["REMOTE_ADDR"]), true);

    // if the captcha is cleared with google, send the mail and echo ok.
    if ($response["success"] != false) {
        // send the actual mail
        @mail($recipient, $subject, $email_content, $headers);

        // the echo goes back to the ajax, so the user can know if everything is ok
        echo "Ваше сообщение было отправлено. Мы скоро с Вами свяжемся.";
    }

} else {
    // Not a POST request, set a 403 (forbidden) response code.
    http_response_code(403);
    echo "There was a problem with your submission, please try again.";
}

?>
