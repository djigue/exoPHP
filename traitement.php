<?php
$prefs = $_POST;
$newPrefs = serialize($prefs);
setcookie("prefs", $newPrefs, time() + (30 * 24 * 60 * 60),'/');
header('location:user.php');