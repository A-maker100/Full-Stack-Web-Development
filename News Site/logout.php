<?php
session_start();
unset($_SESSION["username"]);
session_destroy();

if(isset($_COOKIE['user'])&& isset($_COOKIE["password"])){
    setcookie("user",$_COOKIE["user"],time()-20,"/","",null,true);
    setcookie("password",$_COOKIE["password"],time()-20,"/","",null,true);
}
header("location:login-page.php");
?>

<!DOCTYPE html>
<html>
<body>
<script> alert('You are logged out.\n');</script>
</body>
</html>
