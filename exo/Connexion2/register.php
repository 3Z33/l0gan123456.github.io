<?php
require_once('../db.php');
require_once('mail.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel=stylesheet href="connexion.css"
</head>
<body>

<form action="" method="post">
        <pre>
            <label for="firstname">Prénom :</label>
            <input type="text" name="firstname" id="firstname" required>
            <br>
            <label for="lastname">Nom :</label>
            <input type="text" name="lastname" id="lastname" required>
            <br>
            <label for="username">Pseudo :</label>
            <input type="text" name="username" id="username" oninput='SingleUsername()' required>
            <br>
            <label for="email">email :</label>
            <input type="email" name="email" id="email" required>
            <br>
            <label for="password">Mot de passe :</label>
            <input type="password" name="password" id="password" required>
            <br>
            <label for="confirm_password">Confirmation du mot de passe :</label>
            <input type="password" name="confirm_password" id="confirm_password" oninput="ChangeValue()" required>        

            <label for="masculin">Masculin :</label><input type="radio" name="genre" class="genre" value="m" required>
            <label for="feminin">Féminin  :</label><input type="radio" name="genre" class="genre" value="f" required>

            <br>
            <input type="submit" value="S'inscrire">
            <a href="./login.php">Vous avez déjà un compte</a>
        </pre>
    </form>
    <?php
    if (isset($_POST) && !empty($_POST)) { /* !empty($_POST) = count($_POST) !== 0 */
        $select = $bdd->prepare("SELECT * FROM users WHERE username=? OR email=?");
        $select->execute(array($_POST['username'], $_POST['email']));
        $select = $select->fetchAll();
        if (empty($select)) {
            $token = GenerateToken(50);

            $insert = $bdd->prepare('INSERT INTO users(prenom, nom, email, username, genre, password, token) VALUE (?, ?, ?, ?, ?, ?, ?);');
            $insert->execute(array(
                $_POST['firstname'],
                $_POST['lastname'],
                $_POST['email'],
                $_POST['username'],                
                $_POST['genre'],
                sha1($_POST['password']),
                $token
                
            ));
            
            $msg = "Lien pour vérifier votre adresse mail : http://localhost/l0gan123456.github.io/correction_connexion/verify.php?token=$token"; 
            SendEmail($_POST['email'], $msg, "Validation Adresse Mail", 'DWWM');

            header("Location: login.php?username=" . $_POST['username']);
        } else 
            echo '<script> alert("Ce pseudo ou l\'addresse email sont déja utilisé donc vous devez en utiliser un autre qui ne soit pas le même mais qui ne comporte pas de caractère spécial parce que ca ne peux pas fonctionner et donc si vous ne faite pas ca ne pourra toujours pas fonctioner parce que vous êtes vraiment nul !") </script>';


    }
    ?>
    <br><br><br><br><br><br><br><br><br><br>
    <script>
        function ChangeValue() {
            let Password = document.getElementById('password')
            let confirmPassword = document.getElementById('confirm_password')
            
            if (Password.value == confirmPassword.value)                
                confirmPassword.setCustomValidity('')
            else                 
                confirmPassword.setCustomValidity('Les mots de passe doivent être identique')      
        }
        
    </script>



    
</body>
</html>