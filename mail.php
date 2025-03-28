<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Make sure PHPMailer is installed via Composer

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $message = nl2br(htmlspecialchars($_POST["message"])); // Convert new lines to HTML <br>

    $mail = new PHPMailer(true);

    try {
        // SMTP settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';  // Gmail SMTP server
        $mail->SMTPAuth   = true;
        $mail->Username   = 'monicraj2003@gmail.com'; // Your Gmail address
        $mail->Password   = 'ulvq kvyj gpkx qgrv';  // Replace with your real App Password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Email settings
        $mail->setFrom('monicraj2003@gmail.com', 'Fortune Bottles'); // Sender email & name
        $mail->addAddress('monicraj2003@gmail.com'); // Receiver email
        $mail->addReplyTo($email, $name); // Reply to sender
        $mail->isHTML(true);
        $mail->Subject = "New Contact Form Submission";
        $mail->Body    = "<strong>Name:</strong> $name <br> 
                          <strong>Email:</strong> $email <br> 
                          <strong>Message:</strong> <br> $message";

        if ($mail->send()) {
            echo "<script>alert('Message sent successfully!'); window.location.href='Contact.php';</script>";
        } else {
            echo "<script>alert('Error: Mail not sent!'); window.location.href='Contact.php';</script>";
        }
    } catch (Exception $e) {
        echo "<script>alert('Error: {$mail->ErrorInfo}'); window.location.href='Contact.php';</script>";
    }
}
?>
