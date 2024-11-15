const valide = document.querySelector("#valider");
valide.addEventListener("click", valider);

const vide = document.querySelector("#vider");
vide.addEventListener("click", vider);

function valider() {
    let affichagePrenom = document.getElementById("prenom").value;
    let affichageAge = document.getElementById("age").value;

    if (affichageAge > 120) {
        affichageAge = 120;
    }
    else if (affichageAge < 0) {
        affichageAge = 0;
    }

    document.getElementById("bonjour").textContent = "Bonjour ";
    document.getElementById("leprenom").textContent = affichagePrenom;
    document.getElementById("leprenom").style.color = "blue";
    document.getElementById("leprenom").style.fontWeight = "bold";
    document.getElementById("votreage").textContent = ", Votre âge est ";
    document.getElementById("lage").textContent = affichageAge;
    document.getElementById("lage").style.color = "blue";
    document.getElementById("lage").style.fontWeight = "bold";


    if (affichageAge < 18) {
        document.getElementById("vousetes").textContent = "Vous êtes ";
        document.getElementById("minmaj").textContent = "mineur";
        document.getElementById("minmaj").style.color = "blue";
        document.getElementById("minmaj").style.fontWeight = "bold";
    }
    else {
        document.getElementById("vousetes").textContent = "Vous êtes ";
        document.getElementById("minmaj").textContent = "majeur";
        document.getElementById("minmaj").style.color = "blue";
        document.getElementById("minmaj").style.fontWeight = "bold";
    }

    if (affichageAge < 64) {
        document.getElementById("vousprenez").textContent = "Il vous reste " ;
        document.getElementById("ageretraite").textContent = (64 - affichageAge);
        document.getElementById("ageretraite").style.color = "blue";
        document.getElementById("ageretraite").style.fontWeight = "bold";
        document.getElementById("annee").textContent = " ans avant la retraite.";
    }
    else if (affichageAge > 64) {
        document.getElementById("vousprenez").textContent = "Vous êtes à la retraite depuis " + (affichageAge - 64) + " année(s).";
    }
    else {
        document.getElementById("vousprenez").textContent = "Vous prenez votre retraite cette année !";
    }

}

function vider() {
    let removetexte = "";
    document.getElementById("bonjour").textContent = removetexte;
    document.getElementById("leprenom").textContent = removetexte;
    document.getElementById("votreage").textContent = removetexte;
    document.getElementById("lage").textContent = removetexte;
    document.getElementById("vousetes").textContent = removetexte;
    document.getElementById("minmaj").textContent = removetexte;
    document.getElementById("ageretraite").textContent = removetexte;
    document.getElementById("annee").textContent = removetexte;
    document.getElementById("vousprenez").textContent = removetexte;
}