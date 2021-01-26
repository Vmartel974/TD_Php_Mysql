//Calcul périmètre et air d'un rectangle
function surfaceRectangle() {
    var largeur;
    var longueur;
    largeur = prompt("Quelle est la largeur du rectangle ?");
    longueur = prompt("Quelle est la longueur du rectangle ?");
    alert("La surface vaut " + longueur * largeur);
    alert("Le périmètre vaut " + 2 * (Number(longueur) + Number(largeur)));
}

//Calcul rayon cercle 
function surfaceCercle() {
    var longueur = parseFloat(prompt("Entrez la longueur du cercle : "));
    var rayon = parseFloat(prompt("Entrez le rayon du cercle : "));
    alert("L'air du cercle vaut " + 3.14 * (Number(longueur) * Number(longueur)));
    alert("Le périmètre du cercle vaut " + Number(rayon) * 2 * 3.14) ;


}   