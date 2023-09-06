let Autruche = "Animal"
// let et var permet de dire que je créé une variable d'un nom souhaité ( let ou var font la même chose)
var Perche = "Poisson"
// J'ai défini des varibales de type "string" ( chaine de caractère )
let NombreStagiaire = 10
// j'ai défini une variable de type int avec le nom NombreStagiaire et lui ai donné le nombre 10
var heure = 14.31
// j'ai créé une variable avec le nom heure, je lui ai donné 14.31 ( float/double )
let Allumer = true
// j'ai créé une variable avec le nom Allumer et je lui ai donné la valeur true ( vrai ), le
// type de cette variable est booléen ( true/false == 1/0 )
var Ventilo = null
// j'ai créé une variable avec le nom Ventilo avec comme valeur null ( rien ), le type de cette
// variable est donc --> null

let Phrase = "J'aime l' " + Autruche + " mais pas les " + Perche
// le résultat sera  :  J'aime l'Animal mais pas les Poisson
// concaténné les chaines de caractères et les variables

var calcul = heure + NombreStagiaire
// cela revient à faire  :  14.31 + 10  ( le + va additionner puisque ce sont des int )
// on peut le faire entre 2 variables de type int ou une variable de type int et un nombre

console.log(Phrase)
console.log(calcul)


// Je créé une fonction qui se nome horloge sans paramètres entre ()
// si  temps  est plus petit ou égal à  10 on execute l'addition et le console.log   sinon on ne fait rien
var temps = 1
function horloge() {
    if (temps <= 10) {  //on peut avoir < , > , <= , => , == , !=
        temps = temps + 1    //on peu tincrémenter de 1 de plusieures façons : + 1 , ++ , += ( pareil avec les - )
        console.log(temps)
    }
}  // on additionne 1 avec la variable temps

setInterval(horloge, 1000)




// Je voudrais avoir un compte à rebours qui commence à 50 et qui finit à 0 et qui descend toutes les 2 secondes

var compte = 50
function comptage() {
    if (compte > 0 ) {
    compte -= 1
    console.log(compte)
    }
}

setInterval(comptage, 2000)


//git add .

//git commit -m 'nomdefichier'

//git push -u origin main
