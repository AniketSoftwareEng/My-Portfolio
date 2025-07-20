<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';


require 'vendor/autoload.php'; // If using Composer
// require 'path-to-phpmailer/src/PHPMailer.php'; // If manually downloaded

$mail = new PHPMailer(true);

try {
    // SMTP Settings
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com'; // Change this for other providers
    $mail->SMTPAuth   = true;
    $mail->Username   = 'kamataniket78@gmail.com'; // Your email
    $mail->Password   = 'ssfx gycy jyov ofoi'; // Your email's app password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    // Sender & Receiver
    $mail->setFrom($_POST['email'], $_POST['name']);
    $mail->addAddress('kamataniket78@gmail.com'); // Your email

    // Email Content
    $mail->isHTML(true);
    $mail->Subject = $_POST['subject'];
    $mail->Body    = '<b>Name:</b> ' . $_POST['name'] . '<br>' .
                     '<b>Email:</b> ' . $_POST['email'] . '<br>' .
                     '<b>Message:</b> ' . nl2br($_POST['message']);

    $mail->send();
    echo 'Message has been sent successfully!';
} catch (Exception $e) {
    echo "Message could not be sent. Error: {$mail->ErrorInfo}";
}
?>
