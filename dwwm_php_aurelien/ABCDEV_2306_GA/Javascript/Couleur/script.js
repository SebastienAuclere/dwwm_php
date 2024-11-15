const a = document.querySelector("#rouge2");
a.addEventListener("click", changerRouge);

const b = document.querySelector("#bleu2");
b.addEventListener("click", changerBleu);

const c = document.querySelector("#vert2");
c.addEventListener("click", changerVert);

const d = document.querySelector("#rouge2");
d.addEventListener("click", changerRougeHex);

const e = document.querySelector("#vert2");
e.addEventListener("click", changerVertHex);

const f = document.querySelector("#bleu2");
f.addEventListener("click", changerBleuHex);

/* const adde = document.querySelectorAll(".coul");
for (let i = 0; i < adde.length; i++) {
    adde[i].addEventListener("input", function() {
        let valeursSaisie = document.getElementById("rouge").value + document.getElementById("vert").value  + document.getElementById("bleu").value
        if (estHexa(valeursSaisie)) {
            document.getElementById("laboite").style.backgroundColor = "#" + valeursSaisie;
        }
    });
}

function estHexa(_aTest) {
    let retour = true;
    let caracteresValides = ['a', 'A', 'b', 'B','c', 'C','d', 'D','e', 'E','f', 'F', '0', '1','2', '3','4', '5','6', '7','8', '9'];
    for(let caracter of _aTest)
    {
        if(!caracteresValides.includes(caracter)){
            retour = false;
        }
    }
    return retour;
} */

/* const add = document.querySelectorAll(".coul");
for (let i = 0; i < add.length; i++) {
    add[i].addEventListener("keydown", function(e) {
        if((e.keyCode >= 65  && e.keyCode <= 70) || (e.keyCode >= 96  && e.keyCode <= 105) || e.keyCode === 8){
            // document.getElementById("laboite").style.backgroundColor = "#" + document.getElementById("rouge").value + document.getElementById("vert").value  + document.getElementById("bleu").value
        }
            else {
            e.preventDefault();
        }
    }
)
} */


const adde = document.querySelectorAll(".coul").forEach(
element => { element.addEventListener("blur", function () {


    if(verifHex(element) == true) {
                    let valeursSaisie = document.getElementById("rouge").value + document.getElementById("vert").value  + document.getElementById("bleu").value
                    document.getElementById("laboite").style.backgroundColor = "#" + valeursSaisie;
                }
                else {
                    element.value = "";
                    element.focus();
                    //alert("Veuillez saisir un code hexadécimal");
                    console.log("Veuillez saisir un code hexadécimal"); }
                } ) } )


// for (let i = 0; i < adde.length; i++) {
//     adde[i].addEventListener("blur", function() {

//         if(verifHex(adde[i]) == true) {
//             let valeursSaisie = document.getElementById("rouge").value + document.getElementById("vert").value  + document.getElementById("bleu").value
//             document.getElementById("laboite").style.backgroundColor = "#" + valeursSaisie;
//         }
//         else {
//             adde[i].value = "";
//             adde[i].focus();
//             //alert("Veuillez saisir un code hexadécimal");
//             console.log("Veuillez saisir un code hexadécimal");
//         }
//     });
// }

function verifHex(_chaine) {
    let maChaine = (_chaine.value).toUpperCase();
    let maRegex = /^[A-F0-9]{2}$/;
    if (maRegex.test(maChaine)) {
        console.log("nombre hexa vrai")
        return true;
    } else {
        console.log("Veuillez recommencer, nombre hexa faux")
        return false;
    }
}


function changerRouge() {
    document.getElementById("laboite").style.backgroundColor = "red"
}

function changerBleu() {
    document.getElementById("laboite").style.backgroundColor = "blue"
}

function changerVert() {
    document.getElementById("laboite").style.backgroundColor = "green"
}

function changerRougeHex() {
    document.getElementById("rouge").value = "FF"
    document.getElementById("vert").value = "00"
    document.getElementById("bleu").value = "00"
}

function changerVertHex() {
    document.getElementById("rouge").value = "00"
    document.getElementById("vert").value = "FF"
    document.getElementById("bleu").value = "00"
}

function changerBleuHex() {
    document.getElementById("rouge").value = "00"
    document.getElementById("vert").value = "00"
    document.getElementById("bleu").value = "FF"
}

/* const add = document.querySelectorAll(".coul");
for (let i = 0; i < add.length; i++) {
    add[i].addEventListener("input", function(){
        remplacer(i)
    })
}

function getColor(i){
    document.getElementById("laboite").style.backgroundColor = "#" + document.getElementById("rouge").value + document.getElementById("bleu").value  + document.getElementById("vert").value
    return add[i].value
}

function remplacer(i) {
    let letters = ['a', 'A', 'b', 'B','c', 'C','d', 'D','e', 'E','f', 'F', '0', '1','2', '3','4', '5','6', '7','8', '9'],
    string = getColor(i)
    console.log(string)
    remplacer = string.replace(new RegExp(`[^${letters.join('')}]`, 'g'), '*') } */