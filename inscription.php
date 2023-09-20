<?php
require_once('db.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>inscription</title>
</head>


<style>

.form {
    position: absolute;
    margin:400px;
    right:400px
}





</style>



<body>

<form action="" method="post" class="form">
    <tr><input type="text" placeholder="Nom Prénom" id="nomprenom">nom prenom</tr>
    <br><br>
    <tr><input type="text" placeholder="Nom d'utilisateur" id="user" >nom d'utilisateur</tr>
    <br><br>
    <tr><input type="text" name="pass" placeholder="Mot de passe" id="pass">mot de passe</tr>
    <br><br><br>
    <button type="submit">

</form>


<?php 
        $pass = $_POST['pass'];
        $sql = "INSER INTO code (pass) VALUE (?)";
        $select = $bdd->prepare('SELECT code FROM distrib WHERE code=?');
        $select->execute($_POST['pass']);
        $select = $select->fetchAll();
        /*if (count($select) > 0) 
            echo '<script> alert("Le code est bon") </script>';
        else 
            echo "<script> alert('Le code n\'est pas bon') </script>";*/
    





?> 

    
</body>
</html>