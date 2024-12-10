<?php
$nom = $_POST['nom'];
$password = $_POST['password'];
$url = 'user.php';
$userArray = array('Bart','user2','user3','user4','user5');
$passwordArray = array('pass1', 'pass2','pass3','pass4','pass5');
$userlength = count($userArray);
for ($i = 0; $i < $userlength; $i++) {
    if ($nom == $userArray[$i] && $password == $passwordArray[$i]) {
        session_start();
        $_SESSION['nom'] = $nom;
        $_SESSION['isLogin'] = true;
        header("location:$url");
    }
}
echo 'Pas bon';
echo '<a href="index.php">Login</a>';