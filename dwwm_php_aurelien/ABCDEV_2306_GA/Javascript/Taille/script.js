let number;

const plus = document.querySelector("#augmenter"); // peut aussi s'écrire document.querySelector("#augmenter").add.addEventListener("click", Augmenter) sans le const;
plus.addEventListener("click", augmenter);

const moins = document.querySelector("#reduire");
moins.addEventListener("click", reduire);

const adjust = document.querySelector("#taille");
adjust.addEventListener("change", ajuster);

function affichage(_number) {
    document.getElementById("demo").textContent = _number;
    document.getElementById("texte").style.fontSize = _number + "px"; // le "px" est nécessaire pour changer la taille du texte
}

function augmenter() {
    if(number < 48) {
        number++;
    }
    else {
        number = 16;
    }

affichage(number);
}

function reduire() {
    if(number > 8) {
        number--;
    }
    else {
        number = 16;
    }

affichage(number);
}

function ajuster() {

    if (adjust.value > 48) {
        adjust.value = 48
    }
    else if (adjust.value < 8) {
        adjust.value = 8
    }

    number = adjust.value; // Change les valuers à 8 ou 48 dans le input quand c'est supérieur à 48 ou inférieur à 8

affichage(number);
}