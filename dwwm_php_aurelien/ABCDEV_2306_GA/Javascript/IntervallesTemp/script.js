let barres = false;

const valide = document.querySelector("#calculer");
valide.addEventListener("click", function(){
    afficherDate()
    if(!barres){
        barreA()
        barreB()
    }
    barres = true
});

const valides = document.querySelector("#calculerDiff");
valides.addEventListener("click", differenceDate)

function barreA() {
    let barreA = document.createElement("HR");
    document.getElementById("hrbarre").appendChild(barreA);
}

function barreB() {
    let barreA = document.createElement("HR");
    document.getElementById("hrbarre2").appendChild(barreA);
}

function afficherDate() {
    let currentYear = new Date().getFullYear();
    let currentMonth = new Date().getMonth();
    let currentDate = new Date().getDate();

    currentMonth = (currentMonth + 1) < 10 ? (":0" + (currentMonth + 1)) : ((currentMonth + 1));
    currentDate = currentDate < 10 ? (":0" + currentDate) : (":" + currentDate);

    document.getElementById("dateCom").value = currentYear + currentMonth + currentDate;

    let currentHours = new Date().getHours();
    let currentMinutes = new Date().getMinutes();
    let currentSeconds = new Date().getSeconds();

    currentHours = currentHours < 10 ? (":0" + currentHours) : (currentHours);
    currentMinutes = currentMinutes < 10 ? (":0" + currentMinutes) : (":" + currentMinutes);
    currentSeconds = currentSeconds < 10 ? (":0" + currentSeconds) : (":" + currentSeconds);

    document.getElementById("heureCom").value = currentHours + currentMinutes + currentSeconds;

    document.getElementById("aujourdhui").textContent = "Aujourd'hui nous sommes le ";

    document.getElementById("datecomplete").textContent = currentYear + "/" + currentMonth + "/" + currentDate + ",";
    document.getElementById("datecomplete").textContent = document.getElementById("datecomplete").textContent.replaceAll(":", "");
    document.getElementById("datecomplete").style.color = "blue";
    document.getElementById("datecomplete").style.fontWeight = "bold";

    document.getElementById("heurecourante").textContent = " l'heure courante est ";

    document.getElementById("heureminsec").textContent = currentHours + currentMonth + currentDate + ".";
    document.getElementById("heureminsec").style.color = "blue";
    document.getElementById("heureminsec").style.fontWeight = "bold";
}

function differenceDate() {
    let affichageDate = document.getElementById("diffDate").value;
    let dateSelect = new Date(affichageDate);
    let today = new Date();

    let currentHours = new Date().getHours();
    let currentMinutes = new Date().getMinutes();
    let currentSeconds = new Date().getSeconds();

    currentHours = currentHours < 10 ? (":0" + currentHours) : (currentHours);
    currentMinutes = currentMinutes < 10 ? (":0" + currentMinutes) : (":" + currentMinutes);
    currentSeconds = currentSeconds < 10 ? (":0" + currentSeconds) : (":" + currentSeconds);

    document.getElementById("ilya").textContent = "Il y a ";
    document.getElementById("diffJours").textContent = Math.floor((today.getTime() - dateSelect.getTime())/(1000*60*60*24)) + " jours entre aujourd'hui et le ";
    document.getElementById("previousDate").textContent = today.toLocaleDateString('en-GB') + " à " + currentHours + currentMinutes + currentSeconds;
    document.getElementById("previousDate").style.color = "blue";
    document.getElementById("previousDate").style.fontWeight = "bold";
}
