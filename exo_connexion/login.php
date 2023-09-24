<?php
    require_once('../../l0gan123456.github.io/db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>log in</title>
</head>
<body>

<form action="" method="post">
    <fieldset>
        <legend>LOG IN</legend>
    
    <input type="text" placeholder="Nom d'utilisateur" name="utilisateur">
    <br><br>
    <input type="password" placeholder="Mot de passe" name="mdp">
    <br><br>
    <input type="submit" value="Valider">
        

    </fieldset>

</form>

<?php 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom_utilisateur = $_POST['utilisateur'];
    $mot_de_passe = $_POST['mdp'];

    // Requête pour récupérer le mot de passe hashé de l'utilisateur
    $query = $bdd->prepare('SELECT mdp FROM connexion WHERE utilisateur = ?');
    $query->execute([$nom_utilisateur]);
    $result = $query->fetch();

    // Vérifier si le nom d'utilisateur existe et si le mot de passe est correct
    if ($result && $mot_de_passe === $result['mdp']) {
        // Authentification réussie, rediriger vers la page d'accueil
        header('Location: http://localhost/L0gan123456.github.io/exo_connexion/pagedebienvenue.php');
        exit;
    } else {
        // Authentification échouée, afficher un message d'erreur
        echo "Nom d'utilisateur ou mot de passe incorrect.";
    }
}
    ?>

    
</body>


</html>