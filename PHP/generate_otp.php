<?php

session_start();

if(isset($_POST['otp'])){
    $userOtp = $_POST['otp'];
    if($userOtp == $_SESSION['otp']){
        echo "<p style='color:green';>OTP Verified Successfully!</p>";
        unset($_SESSION['otp']);
    }
    else{
        echo "<p style='color:red;'>Invalid OTP!</p>";
    }
}
else{
    echo "PLEASE Enter OTP.";
    }