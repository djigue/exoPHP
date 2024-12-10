<?php
session_start();
if ($_SESSION["nom"]==" " || $_SESSION["isLogin"]!=true) {
    die('vérification a échoué');
}
echo "bienvenue ".$_SESSION["nom"]."<br>";

if(isset($_COOKIE['prefs'])) {
$prefs= unserialize($_COOKIE['prefs']);
echo "Mes préférences :<br>animal => ".$prefs ['animal']."<br>couleur => ".$prefs['couleur']."<br>";
echo '<a href="edit.php">Editer</a>';
echo '<a href="logout.php">Quitter</a>';
} else {echo 'pas de préférences';
        echo '<a href = "edit.php">Ajouter une préférence</a>';
        echo '<a href="logout.php">Quitter</a>';
    }