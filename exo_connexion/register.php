<?php
    require_once('../../l0gan123456.github.io/db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>inscription</title>
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
    <input type="text" placeholder="Nom" name="nom">
    <br><br>
    <input type="text" placeholder="Prénom" name="prenom">
    <br><br>
    <input type="text" placeholder="Nom d'utilisateur" name="utilisateur">
    <br><br>
    <input type="password" placeholder="Mot de passe" name="mdp">
    <br><br>
    <input type="submit" value="Valider">
        

    </fieldset>

</form>


<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

// Récupération des données du formulaire
$nom = $_POST['nom']; // on met la donnée du champ du formulaire ayant la valeur "name" dans la variable $nom
$prenom = $_POST['prenom'];
$utilisateur = $_POST['utilisateur']; // on met la donnée du champ du formulaire ayant la valeur "email" dans la variable $email
$mdp = $_POST['mdp'];


// Préparation de la requête SQL d'insertion
$insert = $bdd->prepare('INSERT INTO connexion (nom, prenom, utilisateur, mdp) VALUES (?, ?, ?, ?)'); // on prépare la requete pour inserer dans la table "test" aux colonnes nom, mail les valeurs (?, ?)
                                                                        // Les ? dans la requête représentent des emplacements réservés pour les valeurs qui vont êtres fournies plus tard.
// Exécution de la requête avec les valeurs récupérées du formulaire
try {
    $insert->execute([$nom, $prenom, $utilisateur, $mdp]);  // on execute la requete qu'on a mis dans $insert et on donne les valeurs a affecter ([$nom, $email]) aux emplacements réservés (?, ?)
    echo "Inscription réussie !";
} catch (PDOException $e) {
    echo "Erreur lors de l'inscription : " . $e->getMessage();
}
}

    
  
    

?>







</body>
</hmtl>