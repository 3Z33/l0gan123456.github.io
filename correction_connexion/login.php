<?php
require_once('../db.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Connexion</title>
    <link rel=stylesheet href="connexion.css"
</head>
<body>

<form action="" method="post">
        <pre>
            <label for="username">Pseudo ou email :</label>
            <input type="text" name="username" id="username" required>
            <label for="password">Mot de passe :</label>
            <input type="password" name="password" id="password" required>
            <input type="submit" value="Se connecter">
            <a href="./register.php">Vous n'avez pas de compte ?</a>
        </pre>
    </form>
    <?php 
    if (isset($_POST) && !empty($_POST)) {
        $select = $bdd->prepare('SELECT * FROM user WHERE (username=? AOR email=?) AND password=?');
        $select->execute(array(
            $_POST['username'],
            $_POST['username'],
            sha1($_POST['password'])
        ));
        $select = $select->fetch(PDO::FETCH_ASSOC);
        if (!empty($select)) {
            session_start();
            $_SESSION = $select;
            header('Location: index.php');
        } else
            echo "<script> alert('Le mot de passe ou le pseudo n\'est pas bon') </script>";
    }
    ?>



    
</body>
</html>