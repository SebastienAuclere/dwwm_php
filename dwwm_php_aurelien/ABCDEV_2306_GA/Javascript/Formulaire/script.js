const valide = document.querySelector("#valider");
valide.addEventListener("click", valider);

const vide = document.querySelector("#vider");
vide.addEventListener("click", vider);

function valider() {
    let affichagePrenom = document.getElementById("prenom");
    let affichageAge = document.getElementById("age");

    if (affichageAge.value > 120) {
        affichageAge.value = 120;
    }
    else if (affichageAge.value < 0) {
        affichageAge.value = 0;
    }

    document.getElementById("affichage").textContent = "Bonjour: ";
    document.getElementById("blueprenom").textContent = affichagePrenom.value;
    document.getElementById("blueprenom").style.color = "blue";

    document.getElementById("affichageAge").textContent = ". Votre âge est : ";
    document.getElementById("blueage").textContent = affichageAge.value;
    document.getElementById("blueage").style.color = "blue";


    if (affichageAge.value < 18) {
        document.getElementById("majorite").textContent = "Vous êtes ";
        document.getElementById("bluemajorite").textContent = "mineur";
        document.getElementById("bluemajorite").style.color = "blue";
    }

    else {
        document.getElementById("majorite").textContent = "Vous êtes ";
        document.getElementById("bluemajorite").textContent = "majeur";
        document.getElementById("bluemajorite").style.color = "blue";
    }

    if (affichageAge.value < 64) {
        document.getElementById("retraitea").textContent = "Il vous reste ";
        document.getElementById("blueretraite").textContent = (64 - affichageAge.value);
        document.getElementById("blueretraite").style.color = "blue";
        document.getElementById("retraiteb").textContent = " an(s) avant la retraite.";

    }

    else if (affichageAge.value > 64) {
        document.getElementById("retraitea").textContent = "Vous êtes à la retraite depuis ";
        document.getElementById("blueretraite").textContent = (affichageAge.value - 64);
        document.getElementById("blueretraite").style.color = "blue";
        document.getElementById("retraiteb").textContent = " année(s).";
    }

    else {
        document.getElementById("retraitea").textContent = "Vous prenez votre retraite cette année !";
        document.getElementById("blueretraite").textContent = "";
        document.getElementById("retraiteb").textContent = "";

    }

}

function vider() {
    let removetexte = "";
    document.getElementById("affichage").textContent = removetexte;
    document.getElementById("blueprenom").textContent = removetexte;
    document.getElementById("affichageAge").textContent = removetexte;
    document.getElementById("blueage").textContent = removetexte;
    document.getElementById("majorite").textContent = removetexte;
    document.getElementById("bluemajorite").textContent = removetexte;
    document.getElementById("retraitea").textContent = removetexte;
    document.getElementById("blueretraite").textContent = removetexte;
    document.getElementById("retraiteb").textContent = removetexte;
}