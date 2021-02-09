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

//Jour de la semaine
function jourDeLaSemaine() {
    var aujourdhui = new Date;
    jour = aujourdhui.getDay();
    var jourFrancais;
    switch (jour) {
        case 0:
            jourFrancais = "dimanche";
            break;
        case 1:
            jourFrancais = "lundi";
            break;
        case 2:
            jourFrancais = "mardi";
            break;
        case 3:
            jourFrancais = "mercredi";
            break;
        case 4:
            jourFrancais = "jeudi";
            break;
        case 5:
            jourFrancais = "vendredi";
            break;
        case 6:
            jourFrancais = "samedi";
            break;
        default:
            jourFrancais = "jour inexistant";
            break;
    }
    alert("Nous sommes " + jourFrancais + ".");
}

//changement de couleurs 
function couleurs1() {
    document.getElementById("demo").style.color = "lime";
}

function couleurs2() {
    document.getElementById("demo").style.color = "navy";
}

function couleurs3() {
    document.getElementById("demo").style.color = "black";
}

function couleurs4() {
    document.getElementById("demo").style.color = "red";
}

//modification de texte 
const Modif = document.getElementById ("texte");
 Modif.addEventListener('click', function()
{
    Modif.style.width = "1px";
    Modif.style.marginLeft = "50%";
    Modif.style.textAlign = "center";
});

Modif.addEventListener("dblclick", function(){
    Modif.style.textAlign = "left";
    Modif.style.width = "500px";
    Modif.style.marginLeft = "0%";

});

//Echange d'image/texte
function image1() {
    document.getElementById("image").src = "Dragon_Ball.png";
  }
  function image2(){
    document.getElementById("image").src = "GTO.png";
  }
    