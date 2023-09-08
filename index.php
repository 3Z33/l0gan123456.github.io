<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cours PHP</title>
    <!-- <link rel="stylesheet" href="./style.css"> -->
    
</head>
<body>
    <?php          /* pour écrire du php il faut ouvrir ses balises spécifiques  on ouvre <?php  et on referme avec  ?> */
    echo "<p>Bonjour<p>"; /* chaque fin de ligne nécessite ; en php  /// si on fait echo "Bonjour" sans les balises <p> le texte s'affichera sur la page mais ne sera dans aucun balise. */
    echo "<p>" . "Bonjour" . "</p>"; // on peut également faire de cette façon
    $cookie = 10; // en php on définit une variable avec $ suivi du nom que l'on veut donner à cette variable
    $phrase = "Je suis une phrase"; // on met des " " pour les strings
    $nombre = 1.4; // float
    $choix = true; // Booléens
    /*
    Array :
        Indexés
        Associatif
    
        Null => NULL
    

    */

    $titre = '<br>Je suis titre';  //les balises <br> doivent être misent entre "" car elles ne sont par reconnues par php ( ou alors fermer la balise php avant de faire <br>)
    echo $phrase;
    echo $titre;

    // les conditions

    $condition = false;

    if ($condition) {
        echo "<br>Je passe ici donc c'est vrai";
    } else {
        echo "<br>Je passe par la donc c'est faux";
    }

    $code = 4227;

    if ($code == 4227) { // == prend en compte que la variable sois égale  et === prend en compte que la variable sois égale et du même type
        echo "<br>Le code est correct";
    } else {
        echo "<br>Le code n'est pas correct";
    }

    $couleur = "gris";
    echo "<p>J'ai une autruche de couleur ". $couleur ."</p>";

    if ($couleur == "rouge") {  // si
        echo "J'ai une autruche de couleur rouge";
    } else if ($couleur == "bleu") { // sinon si
        echo "J'ai une autruche de couleur bleu";
    } else { // sinon
        echo "<p>J'ai pas d'autruche</p>";
    }

    // Ecriture Ternaire

    $a = 15;
    $un = $a > 11 ? 1 : 0; // si $a plus grand que 11 alors $un est égal à 1 sinon il est égal à 0 
                          //on peut lire cela comme "$a est il plus grand que 11 ?   si oui il est égal à 1 ,  si non il est égal à 0

    // Les Switch 

    $tailles = 187;

    switch ($tailles) {
        case 120:
            echo "<p>Tu es atteint de nanisme.</p>";
            break;
        case 150:
            echo "<p>Tu es très petit(e)</p>";
            break;
        case 170:
            echo "<p>Tu as une taille noramle</p>";
            break;
        case 200:
            echo "<p>Bonjour Monsieur !</p>";
            break;
        default:
            echo "<p>Tu n'existes pas !</p>";
            break;  //ici le break; n'est pas obligatoire
    }

    // Lest tableaux
    $tableau = [];
    $tableau = [
        42, // index 0
        78, // index 1
        48, // index 2
        1486656, // index 3
        "Une Autruche" // index 4
    ]; 
    echo $tableau[4];


    echo '<pre>';  // on utilise '<pre>' pour mieux mettre en forme l'affichage du tableau sur la page
    var_dump($tableau);  // var_dump() permet d'afficher l'integralité d'un tableau
    echo '</pre>';


    //La valeur de $resultat doit être égale à 30 en utilisant que les nombres qui se trouvent dans le tableau exo
    $exo = [4, 12, 78, 98, 65];
    $resultat = $exo[2] - ($exo[0] * $exo[1]);
    echo $resultat;



    // Tableaux Associatifs

    $tab_assoc = [
        "voiture" => "Volskwagen", // type string
        "animal" => "Perroquet", // trype string
        "chiffre" => 10, // type int
        "calvitie" => true, // type Boolean
        "legume" => null // type Null
    ];

    // J'ai fait un tableau avec 5 valeurs qui ont un index que j'ai défini moi même.
    // Voiture est un index et Volkswagen est sa valeur
    // Animale est un index et Perroquet est sa valeur
    // etc ...

    $tab_assoc['bras'] = false; // on ajoute un nouvel index (bras) avec sa valeur (false)  dans notre tableau  $tab_assoc

    echo "<pre>"; var_dump($tab_assoc); echo "</pre>";

    // La boucle while

    $o = 0;
    while(true) {
        $o++;
        echo "<p>Je passe dans la boucle while</p>";
        if ($o == 10) {
            break;  // sert à casser la boucle pour l'arrêter
        }
    }

    // La boucle do-while

    do {
        echo 'Je passe dans la boucle do-while';
    } while (false);

    // La boucle for

    for ($i=0; $i < 10; $i++) {
        echo "<br>Je suis passé ". $i+1 ." fois dans la boucle for";
        }
    
    
    // Créer un tableau Associatif en mettant un index bras de type booléen et un index jambe qui va être un integer

    // Si il n'y a pas de jambe ni de bras Tu es e-tronc !
    //Sinon si il n'y a pas de bras, Pas de bras pas de chocoloat
    // Sinon 
    // Tu es basique donc tu es nul.


    $tab_exo = [
        "bras" => true,
        "jambe" => 1,
    ];

    if ( $tab_exo["bras"] ==! true && $tab_exo["jambe"] ==! 1){  // on peut faire $tab_exo["jambe"] ==! 1   ou  !$tab_exo["bras]
        echo "<br>Tu es un e-tronc !";
    } else if ( $tab_exo["bras"] ==! true && $tab_exo["jambe"] == 1){
        echo "<br>Pas de bras, pas de chocolat";
    } else {
        echo "<br>tu es basique donc tu es nul.";
    }

     ?>

     <form action="" method="post">
        <h2>Register</h2>
        <label for="text">First name: </label>
        <br>
        <input type="text" name="firstname" id="firstname">
    <br><br>
        <label for="text">Last name: </label>
        <br>
        <input type="text" name="lastname" id="lastname">
    <br><br>
        <label for="email">Email: </label>
        <br>
        <input type="email" name="email" id="email">
    <br><br>
        <label for="password">Password: </label>
        <br>
        <input type="password" name="pass" id="pass">
    <br><br>
        <label for="password">Confirm password: </label>
        <br>
        <input type="password" name="cpass" id="cpass">
        <br>
    <label for="text">Gender: </label>
    <br>
    <input type="radio" name="button" id="male" value="male">
    <label for="button1">Male</label>

    <input type="radio" name="button" id="female" value="male">
    <label for="button2">Female</label>

    <input type="radio" name="button" id="other" value="male">
    <label for="button3">Other</label>
    <br>
    <input type="submit" value="submit">

     </form>

    
     <?php
        if (isset($_POST) && !empty($_POST)) {  
            echo '<pre>'; var_dump($_POST); echo '</pre>';
            echo $_POST['firstname'];
            // sha1 Hash le mot c'est à dire le complexifie et le rend ilisible
            // sha1 / md5
            echo sha1($_POST['password']) . "<br>";
            echo md5($_POST['password']);
        }

        // Si method post est rentré dans le formulaire il faut utiliser $_POST , sinon si la methode get est rentrée dans le formulaire il faut utiliser $_GET
        // La fonction isset sert à regarder si la variable qui lui est donnée est bien définie, dans ce cas ci elle regarde si la variable $_POST est définie

        ?>
</body>
</html>