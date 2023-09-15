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
    <button type="button" id="reset" onclick="ResetTimer()">Reset</button>

    <button type="button" id="pause" onclick="PauseTimer()">Pause</button>
    <button type="button" id="play">Play</button>
</form> <!-- si on met un button avec  un type="button" dans un formulaire il sera obsolète, on peut donc retirer le type="button" -->



<?php

     
     /*  on entre cette partie en echo '' pour que les valeurs heure, minute, seconde puissent être entrées   */

    echo '<script>  
    var heure = ' .(!empty($_POST["heure"]) ? $_POST["heure"] : '0') .'
    var minute = ' .(!empty($_POST["minute"]) ? $_POST["minute"] : '0') .'
    var seconde = ' .(!empty($_POST["seconde"]) ? $_POST["seconde"] : '0') .'
    function affichage() {
    
        document.getElementById("minuteur").innerHTML= 
        `${(heure < 10 ? "0" : "") + heure}:
        ${(minute < 10 ? "0" : "") + minute}:
        ${(seconde < 10 ? "0" : "") + seconde}`
    }
        function timer() {
        affichage()
        if (seconde <= 0 && minute <= 0 && heure <= 0) return
    
        if (seconde == 0) {
        if (minute > 0) {
            seconde = 60
            minute--
        } else {
            if (heure > 0) {
                heure--
                minute = 59
                seconde = 60
            }
        }
} 
    seconde--



}


    

var interval = setInterval(timer, 1000)
function PauseTimer() {
    clearInterval(interval)
    interval = null
    document.getElementById("minuteur").style.opacity = "0.5"
}

function ResetTimer() {

    heure = 0
    minute = 0
    seconde = 0
}

document.getElementById("play").addEventListener("click", function() {
    if (interval == null) {
    clearInterval(interval)
    interval = setInterval(timer, 1000)
    document.getElementById("minuteur").style.opacity = "0.5"       
    }
    





})
</script>';
?>


</body>
</html>