document.querySelector("#dys").addEventListener("click", dyslex);

/* function dyslex(){

    if (document.querySelectorAll(".barnav")[0].style.fontFamily == "Channel") { // ou document.querySelector(".barnav").style.fontFamily == "Channel"
        document.querySelectorAll(".barnav").forEach( elem=>{elem.style.fontFamily = "opendyslexie"});
    }
    else {
        document.querySelectorAll(".barnav").forEach( elem=>{elem.style.fontFamily = "Channel"});
    }
} */

// ------------------------------

/*
function dyslex(){
    for(let i = 0; i < document.getElementsByClassName("barnav").length; i++) {
        document.getElementsByClassName("barnav")[i].classList.toggle("dysl");
    }
} */ // c'est un for classique

// ------------------------------



// function dyslex() {
//     for(let i in document.getElementsByClassName("barnav")) {
//         document.getElementsByClassName("barnav")[i].classList.toggle("dysl"); // dysl est la class CSS assoscié
//     }
// } // c'est un for of

// ------------------------------

function dyslex() {
    document.querySelectorAll(".barnav").forEach( elem=>{elem.classList.toggle("dysl")});
} // C'est un forEach

