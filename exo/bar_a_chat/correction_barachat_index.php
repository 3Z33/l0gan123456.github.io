<?php 
session_start();
require_once('dbCat.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link rel="stylesheet" href="correction_bar-a-chat.css">
    <title>Accueil</title>
    </head>
<body>
    <?php 
        $_GET['page'] = 'index';
        include 'inc/header.php'; ?>
    <br><br><br><br>
    <div>
        <p>Bienvenue petit chaventurier</p>
    </div>
    <?php if(!empty($_SESSION)) : ?>
        <!-- Je créer un if global qui ce permet de passer en html pour
        executer ou non les lignes qui trouve entre les balise if et endif -->

        <div>
            <form method="post">
                <h2>Faire une réservation (15 min)</h2>
                <label for="cat">Chat :</label>
                <!-- <datalist id="cat">
                    <option value="Ronron"></option>
                    <option value="Lily"></option>
                    <option value="Pompette"></option>
                    <option value="Garfield"></option>
                </datalist>
                <input list='cat'> -->
                <select name="cat" id="catSelect" required>
                    <option value="Ronron">Ronron</option>
                    <option value="Lily">Lily</option>
                    <option value="Pompette">Pompette</option>
                    <option value="Garfield">Garfield</option> 
                </select>
                <label for="table">N° Table :</label>
                <select name="table" id="table" required>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <label for="date">Date :</label>
                <input type="datetime-local" name="date" id="date" required 
                    value="<?php echo date('Y-n-d'); ?>T<?php echo date('H')+2; ?>:00" 
                    min="<?php echo date('Y-n-d'); ?>T08:00" 
                    max="<?php echo date('Y-n')?>-<?php echo date('d')+7; ?>T19:00"> 
                    
                <label for="comment">Commentaire :</label>
                <textarea name="comment" id="comment" cols="30" rows="5" maxlength='255'></textarea>
                <input type="submit" value="Faire ma réservation">
                </form>
        </div>

        <?php 
        if (isset($_POST) && !empty($_POST)) {
            $insert = $bdd->prepare('INSERT INTO reservation(id_client, id_cat, date, comment, table) VALUES (?, ?, ?, ?, ?)');
            $insert->execute(array(
                $_SESSION['id'],
                $_POST['cat'],
                strtotime($_POST['date']),
                $_POST['comment'],
                $_POST['table']
            ));
        }
        ?>
    <?php endif; ?>


<br><br><br>

    <?php include 'inc/footer.php'; ?>
</body>
</html>