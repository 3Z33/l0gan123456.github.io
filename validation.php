<?php
// pour
require_once('db.php');
if (isset($_POST) && !empty($_POST)) {  
            echo '<pre>'; var_dump($_POST); echo '</pre>';
            echo $_POST['firstname'];
            // sha1 Hash le mot c'est à dire le complexifie et le rend ilisible
            // sha1 / md5
            echo sha1($_POST['pass']) . "<br>";
            echo md5($_POST['pass']);

            $insert = $bdd->prepare('INSERT INTO utilisateur(firstname, lastname, email, password, gender) VALUES (?, ?, ?, ?, ?)');
            $insert->execute(array($_POST['firstname'], $_POST['lastname'], $_POST['email'], md5($_POST['pass']), $_POST['button']));

        header('Location: index.php');
}





?>