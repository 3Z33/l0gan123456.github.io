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
// concaténner les chaines de caractères et les variables

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

/*

var compte = 50
function comptage() {
    if (compte > 0 ) {
    compte -= 1
    console.log(compte)
    }
}

setInterval(comptage, 2000)

*/

//git add .

//git commit -m 'nomdefichier'

//git push -u origin main

// git pull origin main -> pour récupérer les nouvelles modifications sur git hub


// commande pour tout faire en une fois : git add . && git commit -m "Maj" && git push -u origin main ("Maj" ou un nom au choix)

//--------------------------------------------------------------------------------------------------------------------------------------
//--------------------------------------------------------------------------------------------------------------------------------------

//Array = Tableau
// c'est un type de variable qui est elle même un tableau

var tab = [] // on fait une variable de type array vide

var tab = [10, "bonjour", 7.5, null] // on met des éléments dans le tableau, la variable tab contient maintenant 4 valeurs, elles restent dans l'ordre dans laquelle
                                     //ont les a déclarés

console.log(tab[1])  // on compte à partir de l'index 0
console.log(tab[3]) 




// Je voudrais un tableau qui se nomme Chmilblik qui comporte 5 valeurs de type string et 5 valeurs de type int ou float

var Chmilblik = ["Bonjour", "Poisson", "Chien", "Chat", "Ballon", 1, 2, 2.5, 3, 4]

console.log(Chmilblik) //on peut afficher les élémens du tableau dans la console du navigateur
console.log(Chmilblik.lenght) // .lenght permet de savoir la longueur du tableau


// getElementById sélectionne un élément qui à l'id défini sur animal dans ce cas
// document.getElementById("animal").innerHTML = "Autruche"


// addEventListener créé une écoute d'évènement, l'élément "animal" attent l'évènement click-souris pour se changer en "Autruche"
// document.getElementById("animal").addEventListener('click', function() {
    //document.getElementById('animal').innerHTML = "Autruche"
// })

//---------------------------------------------------------------------------------

// getElementById séléctionne un élément qui à l'id défini sur animal dans ce cas addEventListener créé une écoute d'évènement
// exemple avec changement à chaque clicks

let animal = "Autruche"
let temp = ""

document.getElementById("animal").addEventListener('click', function() { // je regarde le texte qui ce trouve dan cet élément
    temp = document.getElementById('animal').innerHTML // Je modifie le texte qui se trouve dans cet élément par la valeur de la variable animal
    document.getElementById('animal').innerHTML = animal
    animal = temp
})


//--------------------------------------------------------------------------





while (false) {} // tant que ce qu'il se trouve dans les () est vrai elle tourne

for (var i = 0; i < 10 ; i++) {  // je défini une variable i qui incrémente de 1 à chaques tours jusqu'à ce que i soit supérieur à 10

}

// La boucle tourne jusqu'à la taille du tableau
for(var i = 0 ; i < Chmilblik.length; i++) {
    console.log(Chmilblik[i])
}

do {

} while (false); // Elle s'éxécute une première fois, puis elle vérifie si la condition est vrai ou fausse pour s'exécuter de nouveau




for(var i = 0 ; i < Chmilblik.length; i++) {
    console.log(Chmilblik[i])
    if (1 == 3) {
        break  // break permet de sortir de la boucle
    }
}

for (index in Chmilblik) {
    console.log(index)
}


// Tableau associatif
var tab_assoc = {"ami":"chien", "cafe":"cafeine"}

for (index in tab_assoc) {
    console.log(index)
}
console.log("index")

//-------------------------------------------------------------

for(var i = 10; i >= 0; i--) {
    //console.log("il reste " + i + " lignes à écrire") // première façon de faire
    //console.log("Il reste ", i, "lignes à écrire")  // deuxième façon de faire
    //console.log(`Il reste ${i} lignes à écrire`)  // troisième façon de faire       // le ${} ne fonctionne que avec les ``
    console.log(`Il reste ${i} lignes${i <= 1 ? '' : 's'} à écrire`)
}

//cela revient à faire :

/*
if (i <= 1) { // si vrai
    console.log('')
} else { // sinon faux
    console.log('s')
}

*/


// une fonction pour trouver tous les multiples de n nombres


function diviseur(n) {
    var i = 2;
    var temp = '1';
    while ( i <= n) {
        if (n % i == 0) {
            temp = temp + ',' + i;
        }
        i++;
    }
    return temp
}

for (let index = 1; index <= 100; index++) {
    console.log(`Les diviseurs de ${index} sont: ${diviseur(index)}`)
}

