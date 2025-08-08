<!--WAPHPP to enter student name and roll no. and store this info in cookies display a personalised message and delete the cookies from the cache memory.
Expire time will be 5 min (300 secs)
-->

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["username"];
    $roll = $_POST["rollno"];

    setcookie("username", $name, time() + 300);  // 5 mins expiry
    setcookie("rollno", $roll, time() + 300);

    header("Location: message.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Set cookies</title>
</head>
<body>
    <h2>Enter your name</h2>
    <form method="post" action="">
        <input type="text" name="username" required>
        <h2>Enter Roll no</h2>
        <input type="text" name="rollno" required>
        <button type="submit">Set Cookie</button>
    </form>
</body>
</html>