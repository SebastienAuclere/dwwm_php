/*let data

fetch('./data.json')
    .then((response) => response.json())
    .then((json) => data = json);*/

let response = await fetch('./data.json');
let data = await response.json();

const name1 = document.getElementById('name1');
const password1 = document.getElementById('password1');
const confirmer = document.getElementById('confirmer');

document.querySelector("#connecter").addEventListener("click", connexion);

function connexion() {
    for (let i = 0; i < 3; i++) {

        let temp = data[i].firstname + "." + data[i].lastname
        
        if(temp.toLowerCase() === name1.value && data[i].password === password1.value) {

            confirmer.textContent = 'Vous êtes connecté';
            return;
        }
        else  {
            confirmer.textContent = 'Mot de passe incorrect';
        }
    }
}