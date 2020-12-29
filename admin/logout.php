<?php
$cookie_name = "user";

setcookie($cookie_name, "admin", time() - 3600,"/");
session_destroy();
header("Location: login.html");
die();
?>
