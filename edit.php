<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $new_animal = $_POST['animal'] ?? '';
    $new_couleur = $_POST['couleur'] ?? '';
    setcookie('animal_prefere', $new_animal, time() + (30 * 24 * 60 * 60), '/');
    setcookie('couleur_prefere', $new_couleur, time() + (30 * 24 * 60 * 60), '/');
    header('Location:edit.php');
    exit;
}
$animal = $_COOKIE['animal_prefere'] ?? 'Non défini';
$couleur = $_COOKIE['couleur_prefere'] ?? 'Non défini';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT PHP</title>
</head>
<body>
    <a href="index.php">Accueil</a>
    <a href="info.php">Informations</a>
    <a href="preference.php">Préférences</a>
    <h1>Modifier vos préférences</h1>
    <p>Animal actuel : <?php echo htmlspecialchars($animal); ?></p>
    <p>Couleur actuelle : <?php echo htmlspecialchars($couleur); ?></p>
    <form method="post" name="prefs" action="traitement.php">
        <label for="animal">Nouvel animal préféré :</label>
        <input type="text" id="animal" name="animal" <?php echo htmlspecialchars($animal); ?>> <br>
        <label for="couleur">Nouvelle couleur préférée :</label>
        <input type="text" id="couleur" name="couleur" <?php echo htmlspecialchars($couleur); ?>> <br>
        <button type="submit">Mettre à jour</button>
    </form>
</body>
</html>
