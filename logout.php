<?php
setcookie("prefs","", time() -3000,"/");
session_start();
session_unset();
session_destroy();

echo '<meta http-equiv="refresh" content ="5;url=index.php">';
echo 'click <a href="index.php">Login</a>';