let barres = false;

const valide = document.querySelector("#calculer");
valide.addEventListener("click", function(){
    calculer()
    if(!barres){
        barreA()
        barreB()
    }
    barres = true
});

//const barreHRA = document.querySelector("#calculer");
//valide.addEventListener("click", barreA, {once:true}); /* {once:true} évite de dupliquer les barres hr */

//const barreHRB = document.querySelector("#calculer");
//valide.addEventListener("click", barreB, {once:true}); /* {once:true} évite de dupliquer les barres hr */

function barreA() {
    let barreA = document.createElement("HR");
    document.getElementById("hrbarre").appendChild(barreA);
}

function barreB() {
    let barreB = document.createElement("HR");
    document.getElementById("hrbarre2").appendChild(barreB);
}

function calculer() {
    let affichageDate = document.getElementById("anniversaire").value;
    let remplacer = affichageDate.replace("T", " à ");
    let anniv = new Date(affichageDate);
    let today = new Date();

    document.getElementById("naissance").textContent = "Vous êtes né(e) le ";
    document.getElementById("datenaissance").textContent = affichageDate;
    document.getElementById("datenaissance").style.color = "blue";
    document.getElementById("datenaissance").style.fontWeight = "bold";
    document.getElementById("datenaissance").textContent = remplacer;
    document.getElementById("ecoule").textContent = "Il s'est écoulé " + Math.floor((today.getTime() - anniv.getTime())/(1000*60*60*24*365.25)) + " années depuis votre naissance";

    if((anniv.getMonth() === 11 && anniv.getDate() >= 22) || (anniv.getMonth() === 0 && anniv.getDate() <= 19)) {
        document.getElementById("astro").textContent = "Votre signe astrologique : ";
        document.getElementById("astrosign").textContent = "Capricorne";
        document.getElementById("astrosign").style.color = "blue";
        document.getElementById("astrosign").style.fontWeight = "bold";
    }

    else if((anniv.getMonth() === 0 && anniv.getDate() >= 20) || (anniv.getMonth() === 1 && anniv.getDate() <= 18)) {
        document.getElementById("astro").textContent = "Votre signe astrologique : ";
        document.getElementById("astrosign").textContent = "Verseau";
        document.getElementById("astrosign").style.color = "blue";
        document.getElementById("astrosign").style.fontWeight = "bold";
    }

    else if((anniv.getMonth() === 1 && anniv.getDate() >= 19) || (anniv.getMonth() === 2 && anniv.getDate() <= 20)) {
        document.getElementById("astro").textContent = "Votre signe astrologique : ";
        document.getElementById("astrosign").textContent = "Poisson";
        document.getElementById("astrosign").style.color = "blue";
        document.getElementById("astrosign").style.fontWeight = "bold";
    }

    else if((anniv.getMonth() === 2 && anniv.getDate() >= 21) || (anniv.getMonth() === 3 && anniv.getDate() <= 19)) {
        document.getElementById("astro").textContent = "Votre signe astrologique : ";
        document.getElementById("astrosign").textContent = "Belier";
        document.getElementById("astrosign").style.color = "blue";
        document.getElementById("astrosign").style.fontWeight = "bold";
    }

    else if((anniv.getMonth() === 3 && anniv.getDate() >= 20) || (anniv.getMonth() === 4 && anniv.getDate() <= 20)) {
        document.getElementById("astro").textContent = "Votre signe astrologique : ";
        document.getElementById("astrosign").textContent = "Taureau";
        document.getElementById("astrosign").style.color = "blue";
        document.getElementById("astrosign").style.fontWeight = "bold";
    }

    else if((anniv.getMonth() === 4 && anniv.getDate() >= 21) || (anniv.getMonth() === 5 && anniv.getDate() <= 20)) {
        document.getElementById("astro").textContent = "Votre signe astrologique : ";
        document.getElementById("astrosign").textContent = "Gémeaux";
        document.getElementById("astrosign").style.color = "blue";
        document.getElementById("astrosign").style.fontWeight = "bold";
    }

    else if((anniv.getMonth() === 5 && anniv.getDate() >= 21) || (anniv.getMonth() === 6 && anniv.getDate() <= 22)) {
        document.getElementById("astro").textContent = "Votre signe astrologique : ";
        document.getElementById("astrosign").textContent = "Cancer";
        document.getElementById("astrosign").style.color = "blue";
        document.getElementById("astrosign").style.fontWeight = "bold";
    }

    else if((anniv.getMonth() === 6 && anniv.getDate() >= 23) || (anniv.getMonth() === 7 && anniv.getDate() <= 22)) {
        document.getElementById("astro").textContent = "Votre signe astrologique : ";
        document.getElementById("astrosign").textContent = "Lion";
        document.getElementById("astrosign").style.color = "blue";
        document.getElementById("astrosign").style.fontWeight = "bold";
    }

    else if((anniv.getMonth() === 7 && anniv.getDate() >= 23) || (anniv.getMonth() === 8 && anniv.getDate() <= 22)) {
        document.getElementById("astro").textContent = "Votre signe astrologique : ";
        document.getElementById("astrosign").textContent = "Vierge";
        document.getElementById("astrosign").style.color = "blue";
        document.getElementById("astrosign").style.fontWeight = "bold";
    }

    else if((anniv.getMonth() === 8 && anniv.getDate() >= 23) || (anniv.getMonth() === 9 && anniv.getDate() <= 22)) {
        document.getElementById("astro").textContent = "Votre signe astrologique : ";
        document.getElementById("astrosign").textContent = "Balance";
        document.getElementById("astrosign").style.color = "blue";
        document.getElementById("astrosign").style.fontWeight = "bold";
    }

    else if((anniv.getMonth() === 9 && anniv.getDate() >= 23) || (anniv.getMonth() === 10 && anniv.getDate() <= 21)) {
        document.getElementById("astro").textContent = "Votre signe astrologique : ";
        document.getElementById("astrosign").textContent = "Scorpion";
        document.getElementById("astrosign").style.color = "blue";
        document.getElementById("astrosign").style.fontWeight = "bold";
    }

    else if((anniv.getMonth() === 10 && anniv.getDate() >= 22) || (anniv.getMonth() === 11 && anniv.getDate() <= 21)) {
        document.getElementById("astro").textContent = "Votre signe astrologique : ";
        document.getElementById("astrosign").textContent = "Sagittaire";
        document.getElementById("astrosign").style.color = "blue";
        document.getElementById("astrosign").style.fontWeight = "bold";
    }
}