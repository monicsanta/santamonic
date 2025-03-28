<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Ensure PHPMailer is installed

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    $mail = new PHPMailer(true);

    try { 
        // SMTP settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';  // SMTP server (Gmail in this case)
        $mail->SMTPAuth   = true;
        $mail->Username   = 'monicraj2003@gmail.com'; // Your Gmail address
        $mail->Password   = 'ulvq kvyj gpkx qgrv';  // Generate App Password (not your normal Gmail password)
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Email settings
        $mail->setFrom($email, $name);
        $mail->addAddress('monicraj2003@gmail.com'); // Receiver email
        $mail->Subject = "New Contact Form Submission";
        $mail->Body    = "Name: $name\nEmail: $email\nMessage:\n$message";

        $mail->send();
        echo "<script>alert('Message sent successfully!'); window.location.href='Contact.php';</script>";
    } catch (Exception $e) {
        echo "<script>alert('Error: {$mail->ErrorInfo}'); window.location.href='Contact.php';</script>";
    }
}
?>
 