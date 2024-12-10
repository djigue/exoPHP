<?php
session_start();
$_SESSION['nom'] = 'SIMPSON';
$_SESSION['prenom'] = 'Homer';
$_SESSION['age'] = 40;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $animal = $_POST['animal'] ?? '';
    $couleur = $_POST['couleur'] ??'';
    setcookie('animal_prefere', $animal, time() + (30 * 24 * 60 * 60),'/');
    setcookie('couleur_prefere', $couleur, time() + (30 * 24 * 60 * 60),'/');
    header('Location:index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <a href="info.php">Informations</a>
    <a href="preference.php">Préférences</a>
    <a href="edit.php">Modifiez vos informations</a>
    <a href="verif.php">verif</a>
    <section>
        <h1>Exo 1</h1>
    <p> User agent : <?php echo $_SERVER['HTTP_USER_AGENT'];?> <br></p>
    <p> Adresse IP : <?php echo $_SERVER['SERVER_ADDR'];?> <br></p>
    <p> Nom du server : <?php echo $_SERVER['SERVER_NAME'];?> <br></p>
    </section>  
    <section>
        <h1>identifiez vous</h1>
        <form method="post" name="login" action="verif.php">
            nom : <input type="password" name="nom" /> <br>
            password : <input type="password" name="password" /> <br>
            <input type="submit" value="login" />
        </form>
    </section>
    <section>
        <h1>Donnez nous des infos sur vous</h1>
        <form method="post" action="index.php">
            <label for="animal">Quel est votre animal préféré ?</label>
            <input type="text" id="animal" name="animal"> <br>
            <label for="couleur">Quelle est votre couleur préférée ?</label>
            <input type="text" id="couleur" name="couleur"> <br>
            <button type="submit">Enregistrer</button>
        </form>
    </section>
</body>
</html>