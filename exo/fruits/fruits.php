<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script src="../../jquery-3.7.1.min.js"></script> 

    <style>

        li {
            list-style:none;
        }

    </style>
</head>
<body>

<!-- Nous avons 2 listes déroulantes, la première (liste A) contient des fruits et la seconde (liste B) est notre panier. Il faudra donc remplir notre panier de fruits.
Pour ce faire, 2 boutons sont à notre disposition : "Ajouter" permet de prendre un fruit de la liste A et de l'insérer dans la liste B (tout en le supprimant de la liste A).
Le bouton "Supprimer" fait exactement la même chose dans le sens inverse.
 l'état de ces 2 boutons : ils ne doivent pas être cliquables si aucun élément de leur liste respective n'est sélectionné. -->


 <div>
 <ul id="fruits">
    <li>Pomme<input type="checkbox" class="bt_checkbox" value="Pomme"></li>
    <li>Bannane<input type="checkbox" class="bt_checkbox" value="Bannane"></li>
    <li>Fraises<input type="checkbox" class="bt_checkbox" value="Fraises"></li>
    <li>Cerises<input type="checkbox" class="bt_checkbox" value="Cerises"></li>
    <li>Noix<input type="checkbox" class="bt_checkbox" value="Noix"></li>
 </ul>

 <button id="ajouter">Ajouter</button>
 <button id="effacer">Effacer</button>
</div>


<div>
<ul id="panier">
    
</ul>
</div>


<script>
    $('#ajouter').on('click', function() {
        $('#fruits li input:checked').each(function() {
            var box = $(this).val();
            var fruit = $(this).parent();
            fruit.detach();

            $('#panier').append(fruit);
        });
    });

    $('#effacer').on('click', function() {
        $('#panier li input:checked').each(function() {
            var box = $(this).val();
            var fruit = $(this).parent();
            fruit.detach();

            $('#fruits').append(fruit);
        });
    });

    $('.bt_checkbox').on('change', function() {
        var checked = $('.bt_checkbox:checked').length > 0;
        $('#ajouter').prop('disabled', !checked);
        $('#effacer').prop('disabled', !checked);
    });
    

    
</script>


    
</body>
</html>