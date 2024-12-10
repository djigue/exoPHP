<?php 
session_start();
$nom = $_SESSION["nom"] ?? "Non défini";
$prenom = $_SESSION["prenom"] ?? "Non défini";
$age = $_SESSION["age"] ?? "Non défini";
$animal = $_COOKIE['animal_prefere'] ?? "Non défini";
$couleur = $_COOKIE['couleur_prefere'] ?? "Non defini";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP INFO</title>
</head>
<body>
    <a href="index.php">Acceuil</a>
    <a href="preference.php">Préférences</a>
    <a href="edit.php">Modifiez vos informations</a>
    <p>Nom : <?php echo htmlspecialchars($nom);?> <br></p>
    <p>Prénom : <?php echo htmlspecialchars($prenom);?> <br></p>
    <p>Age : <?php echo htmlspecialchars($age);?></p>
    <p>Animal préféré : <?php echo htmlspecialchars($animal); ?> <br></p>
    <p>Couleur préférée : <?php echo htmlspecialchars($couleur); ?> <br></p>
</body>
</html>