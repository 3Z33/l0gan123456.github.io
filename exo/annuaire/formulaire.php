<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Créer un formulaire en php qui resemble à celui ci : 
    https://cdn.discordapp.com/attachments/550289332812906504/1163773698625511424/image.png?ex=6540cbb7&is=652e56b7&hm=aa9c41f65f2692145768cac347b0c78eeb43e691f311679e1ab7d64bddde95a8&
    -->
    <!-- Il devra être fonctionnel et être incrémenter dans une base donnée
    dans une table qui s'appelle annuaire qui resembler à ceci :

    - id_annuaire (INT, 3, AI)
    - nom (VARCHAR, 30)
    - prenom (VARCHAR, 30)
    - telephone (INT, 10)
    - profession (VARCHAR, 30)
    - ville (VARCHAR, 30)
    - codepostal (INT, 5)
    - adresse (VARCHAR, 30)
    - date_de_naissance (DATE)
    - sexe (tinyint,1, 'm','f')
    - description (TEXT)
    
-->
<form action="">
    <fieldset>
        <legend>Informations</legend>
            <label for="name">Nom *</label><br>
            <input type="text"><br>
            <label for="firstname">Prénom *</label><br>
            <input type="text"><br>
            <label for="number">Telephone *</label><br>
            <input type="number"><br>
            <label for="profession">Profession *</label><br>
            <input type="text"><br>
            <label for="city">Ville</label><br>
            <input type="text"><br>
            <label for="number">Code Postal</label><br>
            <input type="number"><br>
            <label for="Adress">Adresse</label><br>
            <input type="textfield" maxlenght="100" height="30">
    </fieldset>
</form>

</body>
</html>
