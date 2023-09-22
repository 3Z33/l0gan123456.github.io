<?php
    require_once('db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<!-- exo : créer trois pages, une de connexion, une d'inscription, et une page d'acceuil avec des liens
    hypertext et si possible réussir à faire afficher le nom et prénom de la personne
-->

<!-- Page d'accueil -->



<!-- Page d'inscription -->

<form action="" method="post">
    <fieldset>
        <legend>INSCRIPTION</legend>
    <br>
    <input type="text" placeholder="Nom">
    <br><br>
    <input type="text" placeholder="Prénom">
    <br><br>
    <input type="text" placeholder="Nom d'utilisateur">
    <br><br>
    <input type="password" placeholder="Mot de passe">
    <br><br>
    <input type="submit" value="Valider">
        

    </fieldset>

</form>


<?php

if (isset($_POST) && !empty($_POST)) {
    $select = $bdd->prepare('SELECT nom FROM connexion WHERE nom=? and prenom=?');
    $select->execute(array(
        //sha1($_POST['number']),
        $_POST['nom']
    ));
    $select = $select->fetchAll();
    
}
?>







</body>
</hmtl>