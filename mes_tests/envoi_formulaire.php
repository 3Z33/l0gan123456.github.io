
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulaire d'inscription</title>
</head>
<body>
    <h1>Inscription</h1>
    <form action="" method="post">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required>
        <br>
        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required>
        <br>
        <input type="submit" value="Inscription">
    </form>
</body>

<?php
// Connexion à la base de données (à adapter selon vos paramètres)

try {
    $bdd = new PDO('mysql:host=localhost;dbname=cours;charset=utf8', 'Logan', 'azer'); // on se connecte à la base de donnée
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}

// Récupération des données du formulaire
$nom = $_POST['nom']; // on met la donnée du champ du formulaire ayant la valeur "name" dans la variable $nom
$email = $_POST['email']; // on met la donnée du champ du formulaire ayant la valeur "email" dans la variable $email

// Préparation de la requête SQL d'insertion
$insert = $bdd->prepare('INSERT INTO test (nom, mail) VALUES (?, ?)'); // on prépare la requete pour inserer dans la table "test" aux colonnes nom, mail les valeurs (?, ?)
                                                                        // Les ? dans la requête représentent des emplacements réservés pour les valeurs qui vont êtres fournies plus tard.
// Exécution de la requête avec les valeurs récupérées du formulaire
try {
    $insert->execute([$nom, $email]);  // on execute la requete qu'on a mis dans $insert et on donne les valeurs a affecter ([$nom, $email]) aux emplacements réservés (?, ?)
    echo "Inscription réussie !";
} catch (PDOException $e) {
    echo "Erreur lors de l'inscription : " . $e->getMessage();
}
?>




</html>