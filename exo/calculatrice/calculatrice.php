<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="calculatrice.css">
</head>
<body>

    <form action="#" method="">
        
        <fieldset>
        <div class="btn">
            <input type="text" id="ecran">
            <div class="nb">1</div>
            <div class="nb">2</div>
            <div class="nb">3</div>
            <div class="nb">4</div>
            <div class="nb">5</div>
            <div class="nb">6</div>
            <div class="nb">7</div>
            <div class="nb">8</div>
            <div class="nb">9</div>
            <div class="nb">0</div>

            <div class="+"style=background-color:red>+</div>
            <div class="-"style=background-color:red>-</div>
            <div class="*"style=background-color:red>*</div>
            <div class="/"style=background-color:red>/</div>
            <div class="=" style=background-color:red>=</div>
        </div>
        
            
        </fieldset>
    </form>

    <script>
        
    </script>


    <script>/*
    var button = document.getElementsByClassName('nb')

        for (let index = 0; index < button.length; index++) {
            if (button[index].id.length > 0 || button[index].type == 'submit') continue
            button[index].addEventListener('click', function() {
                var input = document.getElementById('affiche')
                var span = document.getElementById('invisible')
                if (input.value.length == 4) {
                    input.value = ""
                    span.value = ""
                    return
                }
                span.value += button[index].innerHTML
                input.value += '*'
            })
        } */
    </script>
</body>
</html>