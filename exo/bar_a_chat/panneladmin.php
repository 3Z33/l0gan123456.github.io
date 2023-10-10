<?php 
session_start();
require_once('dbCat.php'); 

if (!empty($_SESSION)) {
    $select = $bdd->prepare('SELECT * FROM users WHERE id=?');
    $select->execute(array(
        $_SESSION['id']
    ));
    $select = $select->fetch();
    if ($select['role'] < 3) {
        header('Location: correction_barachat_index.php'); 
    } 
} else {
    header('Location: correction_barachat_index.php');
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="correction_bar-a-chat.css">
    <title>Panel Admin</title>
</head>
<body>
    <?php 
        $_GET['page'] = "panneladmin";
        include 'inc/header.php' 
    ?>

<form action="AddCat.php" method="post">
        <h2>Rajout de chat </h2>
        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" id="prenom" required>
        <label for="color">Couleur :</label>
        <input type="text" name="color" id="color" required>
        <label for="photo">Photo :</label>
        <input type="file" name="photo" id="photo" accept="image/png, image/jpeg" required>
        <label for="description">Déscription :</label>
        <textarea name="desc" id="desc" cols="30" rows="10" required></textarea>
        <label for="male">Male</label>
        <input type="radio" name="sexe" id="sexe" value="male" required>
        <label for="female">Femelle</label>
        <input type="radio" name="sexe" id="sexe" value="femelle" required>
        <input type="submit" value="Ajouter le chat">

    </form>















        <?php include 'inc/footer.php' ?>

</body>
</html>