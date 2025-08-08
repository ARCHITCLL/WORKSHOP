<?php
if(isset($_COOKIE["username"])){
    $name = $_COOKIE["username"];
    $roll = $_COOKIE["rollno"];
}
else{
    $name = null;
    $roll = null;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>hello </title>
</head>
<body>
    <?php if ($name): ?>
        <h2> Welcome, <?php echo htmlspecialchars($name); ?>!</h2>
        <h6><?php echo "How are have you been $name ? <br> I think you are fine (:-T)"; ?></h6>
        <a href="delete_cookie.php">Delete Cookie</a>
    <?php else: ?>
        <h2>No cookie found.Please <a href="question2.php">enter your name</a>.</h2>

    <?php endif; ?>
</body>
</html>