<?php
session_start();
require 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$info = "";

if (isset($_POST["send_otp"])) {
    $email = $_POST["email"];
    $otp = rand(100000, 999999);
    $_SESSION["email"] = $email;
    $_SESSION["otp"] = $otp;

    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "your_email@gmail.com";
        $mail->Password = "your_app_password";
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;
        $mail->setFrom("your_email@gmail.com", "OTP SERVICE");
        $mail->addAddress($email);
        $mail->isHTML(true);
        $mail->Subject = "Your OTP Code";
        $mail->Body = "Your OTP is: <b>$otp</b>";
        $mail->send();
        $info = "OTP sent to $email";
    } catch (Exception $e) {
        $info = "Message could not be sent. Error: {$mail->ErrorInfo}";
    }
}

if (isset($_POST["verify_otp"])) {
    $entered_otp = $_POST["otp"];
    if ($entered_otp == $_SESSION["otp"]) {
        $info = "OTP Verified Successfully";
        session_destroy();
    } else {
        $info = "Invalid OTP";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP Verification</title>
</head>
<body>
    <h2>OTP Verification</h2>
    <p><?php echo $info; ?></p>

    <form method="post">
        <label for="email">Enter Email: </label>
        <input type="email" name="email" required>
        <button type="submit" name="send_otp">Send OTP</button>
    </form>

    <br>

    <form method="post">
        <label for="otp">Enter OTP: </label>
        <input type="number" name="otp" required>
        <button type="submit" name="verify_otp">Verify OTP</button>
    </form>
</body>
</html>

