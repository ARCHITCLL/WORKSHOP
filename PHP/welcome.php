<?php
if(isset($_COOKIE["user"])){
    $name = $_COOKIE["user"];
}
else{
    $name = null;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>
    <?php if ($name): ?>
        <h2> Welcome, <?php echo htmlspecialchars($name); ?>!</h2>
        <a href="delete_cookie.php">Delete Cookie</a>
    <?php else: ?>
        <h2>No cookie found.Please <a href="index.php">enter your name</a>.</h2>

    <?php endif; ?>
</body>
</html>