const add = document.querySelector("#prixunit1");
add.addEventListener("input", Calculer);

const add1 = document.querySelector("#quantite1");
add1.addEventListener("input", Calculer);

const add2 = document.querySelector("#prixunit2");
add2.addEventListener("input", Calculer);

const add3 = document.querySelector("#quantite2");
add3.addEventListener("input", Calculer);

const add4 = document.querySelector("#prix3");
add4.addEventListener("input", Calculer);

function Calculer() {
    document.getElementById("prix1").value = document.querySelector("#prixunit1").value * document.querySelector("#quantite1").value;
    document.getElementById("prix2").value = document.querySelector("#prixunit2").value * document.querySelector("#quantite2").value;
    document.getElementById("prix3").value = 1*document.querySelector("#prix2").value + 1*document.querySelector("#prix1").value;
}