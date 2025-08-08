<?php
setcookie("user", "", time() - 20);
$deleted = true;
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete Cookie</title>
</head>
<body>
    <?php if ($deleted): ?>
        <h2>Cookie has been deleted successfully!</h2>
        <a href="index.php">Go back to Home</a>
    <?php else: ?>
        <h2>Failed to delete cookie.</h2>
        <a href="index.php">Try again</a>
    <?php endif; ?>
</body>
</html>
