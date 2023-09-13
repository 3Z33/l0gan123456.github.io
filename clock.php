<!-- localhost/cours_php/l0gan123456.github.io/clock.php -->



<!-- correction exo : créer un minuteur ------------------------------------------>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Clock.php</title>
</head>
<body>

<p id="minuteur">00:00:00</p>
<form action="" method="post">     <!-- method="post" permet de cacher les données dans la barre de recherche du navigateur quand on s'inscrit via un formulaire.-->
    <label for ="heure"> Heures: </label>
    <input type="number" name="heure" id="heure" value=0 min=0 max=23>

    <label for ="minute"> Minutes: </label> 
    <input type="number" name="minute" id="minute" value=0 min=0 max=59>

    <label for ="seconde"> Secondes: </label> 
    <input type="number" name="seconde" id="seconde" value=15 min=0 max=59>

    <input type="submit" value="Submit">
    <input type="reset" value="Reset">
</form>

<?php
    

    echo '<script>
    var heure = ' .(!empty($_POST["heure"]) ? $_POST["heure"] : '0') .'
    var minute = ' .(!empty($_POST["minute"]) ? $_POST["minute"] : '0') .'
    var seconde = ' .(!empty($_POST["seconde"]) ? $_POST["seconde"] : '15') .'
    
    setInterval(function() {
        document.getElementById("minuteur").innerHTML= 
        `${(heure < 10 ? "0" : "") + heure}:
        ${(minute < 10 ? "0" : "") + minute}:
        ${(seconde < 10 ? "0" : "") + seconde}`
        if (seconde <= 0) return
        seconde--
        if (seconde == 0)
        if (minute > 0) {
            seconde = 59
            minute--
        } else {
            if (heure > 0) {
                heure--
                minute = 59
                seconde = 59
            }
        }
}, 1000)

</script>'
?>


</body>
</html>