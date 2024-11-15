const add = document.querySelector("#ajout");
add.addEventListener("click", Ajouter);
var number = 1;

const remove = document.querySelector("#reinitialiser");
remove.addEventListener("click", Reinitialiser);

function Ajouter() {
    document.querySelector("#demo").textContent = number++;
}

function Reinitialiser() {
    number = 0;
    document.querySelector("#demo").textContent = number;
}