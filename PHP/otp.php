<!DOCTYPE html>
<html>
    <head>
        <head>
            OTP
        </head>
    </head>
    <body>
    <?php
    session_start();

    $otp = rand(min:100000,max:999999);

    $_SESSION['otp'] = $otp;

    echo "<p>Your OTP is: <strong>$otp</strong><p>";
    ?>
    <form method="post" action="generate_otp.php">
        Enter OTP: <input type="text" name="otp" required>
        <button type="submit"> Verify </button>
    </form>
    </body>
</htm>