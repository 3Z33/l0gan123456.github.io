<?php 
require_once('dbCat.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="correction_bar-a-chat.css">
    <title>Inscription</title>
</head>
<body>
    <?php include 'inc/header.php'; ?>
    <br><br><br><br>

    <form method="post">
        <label for="username">Username :</label>
        <input type="text" name="username" id="username" required>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" required>
        <label for="password">Mot de passe :</label>
        <input type="password" name="password" id="password" required>
        <label for="password">Confirmer le btrd(e) :</label>
        <input type="password" oninput='ChangeValue()' name="Confirm_password" id="Confirm_password" required>
        <input type="submit" value="Créer mon compte">
    </form>

    <?php 
        if (isset($_POST) && !empty($_POST)) {
            $insert = $bdd->prepare('INSERT INTO users(username, email, password) VALUES (?, ?, ?)');
            $insert->execute(array (
                $_POST['username'],
                $_POST['email'],
                password_hash($_POST['password'], PASSWORD_ARGON2ID)
            ));

            header('Location: correction_bar-a-chat_login.php');
        }
    
    ?>


    <script>
        function ChangeValue() {
            let Password = document.getElementById('password')
            let confirmPassword = document.getElementById('Confirm_password')
            
            if (Password.value == confirmPassword.value)                
                confirmPassword.setCustomValidity('')
            else                 
                confirmPassword.setCustomValidity('Les mots de passe doivent être identique')      
        }
    </script>   

    <br><br><br><br><br><br><br>







    <?php include 'inc/footer.php'; ?>

</body>
</html>