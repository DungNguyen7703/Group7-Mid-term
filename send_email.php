<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$code = $_POST["code"];
$email = $_POST["email"];
$_SESSION["email"] = $email;
$content = $_POST["content"];

$con = mysqli_connect("localhost", "root", "", "exam2");
$sql = "SELECT * FROM accounts WHERE email = '$email'";
$result = $con->query($sql);
if ($result->num_rows > 0) {
    require 'phpmailer/src/Exception.php';
    require 'phpmailer/src/Phpmailer.php';
    require 'phpmailer/src/SMTP.php';

    if (isset($_POST["send"])) {
        $mail = new PHPMailer(true);

        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "nngocm777@gmail.com";
        $mail->Password = "kmvjqeoipdtauvry";
        $mail->SMTPSecure = "ssl";
        $mail->Port = 465;

        $mail->setFrom("nngocm777@gmail.com");
        $mail->addAddress($email);
        $mail->isHTML(true);
        $mail->Subject = "Authentication code: $code";
        $mail->Body = "$content";

        $mail->send();

        echo "<script>alert('Email sent!')</script>";
        echo "<script>window.location.href = 'forgot_pass.php'</script>";
    }
} else {
    echo "<script>alert('Email does not exits in database!')</script>";
    echo "<script>window.location.href = 'forgot_pass.php'</script>";
    session_unset();
    session_destroy();
}




//kmvj qeoi pdta uvry