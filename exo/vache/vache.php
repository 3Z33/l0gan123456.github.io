<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script src="../../jquery-3.7.1.min.js"></script>

</head>
<body>


    <p>Je n'ai jamais vu une vache <span class="vache">Bleue</span>, Je n'espère jamais en voir une, mais je peux vous dire, de toute façon, je verrais plutôt qu'être un !</p>

    <label for="vache">Changer la couleur de la vache : </label>
    <input type="text" id="vache"> 
    <button id="btcolor">changer !</button>


<script>

 $('#btcolor').click(function() {
            let couleur = $('#vache').val()
            $('.vache').text(couleur)
        })

</script>
    
</body>
</html>