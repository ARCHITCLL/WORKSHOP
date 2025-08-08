<!--$_SESSION : global variable -->
<!-- 
1. session_abort: Discard session changes and end the session without saving.
2. session_cache_expire: Get/set session cache expiration time (in minutes).
3. session_cache_limiter: Get/set cache control method for sessions (e.g., public, private).
4. session_commit: Alias of session_write_close(); ends session and saves data.
5. session_create_id: Create a new unique session ID.
6. session_decode: Decodes session data from a string and loads it into $_SESSION.
7. session_destroy: Destroys all data in a session (logout, etc.).
8. session_encode: Encodes the current $_SESSION data as a string.
9. session_gc: Performs garbage collection (cleans expired session data).
10. session_get_cookie_params: Get session cookie settings/parameters (lifetime, path, etc.).
11. session_id: Get/set the session ID.
12. session_module_name: Get/set the current session module (e.g., files, user). 
-->
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username=$_POST["username"];
    setcookie("user", $username,time()+3600);
    header("Location:welcome.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            set cookies
        </title>
    </head>
    <body>
        <h2>Enter you name</h2>

        <form method="post" action="">
            <input type="tree" name="username" required>
            <button type="submit"> Set Cookie</button>
        </form>
    </body>
</html>