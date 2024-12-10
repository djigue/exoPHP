<?php 
session_start();
$animal = $_COOKIE['animal_prefere'] ?? "Non défini";
$couleur = $_COOKIE['couleur_prefere'] ?? "Non defini";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP PREFERENCES</title>
</head>
<body>
    <a href="index.php">Acceuil</a>
    <a href="info.php">Informations</a>
    <a href="edit.php">Modifiez vos informations</a>
    <p>Animal préféré : <?php echo htmlspecialchars($animal); ?> <br></p>
    <p>Couleur préférée : <?php echo htmlspecialchars($couleur); ?> <br></p>  
</body>
</html>