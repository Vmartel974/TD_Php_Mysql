//Calcul périmètre et air d'un rectangle
function surfaceRectangle() {
    var largeur;
    var longueur;
    largeur = prompt("Quelle est la largeur du rectangle ?");
    longueur = prompt("Quelle est la longueur du rectangle ?");
    alert("L'aire vaut " + longueur * largeur);
    alert("Le périmètre vaut " + 2 * (Number(longueur) + Number(largeur)));
}

//Calcul rayon cercle 
function surfaceCercle() {
    var longueur = parseFloat(prompt("Entrez la longueur du cercle : "));
    var rayon = parseFloat(prompt("Entrez le rayon du cercle : "));
    alert("L'aire du cercle vaut " + 3.14 * (Number(longueur) * Number(longueur)) + " cm²");
    alert("Le périmètre du cercle vaut " + Number(rayon) * 2 * 3.14 + " cm");
}

//Calcule fonction multiplie
var a = 3;
var b = 2;

function multiplie(x = 8) {
    return 3 * x;
}

function affiche1() {
    alert(multiplie(a));
    alert(multiplie(b));
    alert(multiplie());
}

//Fonction additionne 
var tab = [-2, 1, 4];

function additionne(x) {
    return (x + 2);
}

function affiche2() {
    alert(additionne(tab[tab.length - 3]));
    alert(additionne(tab[tab.length - 1]));
}

//Fonction tableau
function boucle() {
    var tab = new Array(3);
    for (var i = 0; i < tab.length; i++) {
        tab[i] = i * i;
    }
    alert(tab);
}

function boucle2() {
    var longueur = parseInt(prompt('Quelle est la longueur souhaitée du tableau?'));
    var tab = new Array();
    for (var i = 0; i < longueur; i++) {
        tab[i] = i * i;
    }
    alert(tab);
}

//Fonction tab soustrait
var tab = [-2, 1, 4];

function soustrait(x) {
    if (x >= 0) return (x - 2);
    else return "Nombre négatif!";
}

function affiche3() {
    alert(soustrait(tab[tab.length - 3]));
    alert(soustrait(tab[tab.length - 1]));
}