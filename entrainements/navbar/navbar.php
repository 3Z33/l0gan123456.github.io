<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<form action="" method="post">
        <fieldset>
            <label for="nom">name</label><br>
            <input type="text"><br><br>
            <label for="prenom">firstname</label><br>
            <input type="text"><br><br><br>
            <input type="submit" value="activer">
        </fieldset>
</form>
    <button id="bouton">UnBouton</button>

    <script>
        var bt = document.getElementById("bouton");
        bouton.addEventListener("click", function() {
            alert("test");
        });

    </script>




    
</body>
</html>