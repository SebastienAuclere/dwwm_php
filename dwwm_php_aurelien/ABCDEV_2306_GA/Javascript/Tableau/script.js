const people = ['Mike Dev', 'John Makenzie', 'Léa Grande'];

let list = document.getElementById("prenomnom");
let list2 = document.getElementById("test");

for (i = 0; i < people.length; i++) {
    let li = document.createElement('li');
    li.textContent = people[i];
    list.appendChild(li);
    li.setAttribute('class', i);
}

function createCell(_row, _content) {
    
    let cell = _row.insertCell();
    cell.textContent = _content;
} 

function createTitleCell(_row, _content) {
    let myTitleCell = document.createElement('th');
    myTitleCell.textContent = _content;
    _row.appendChild(myTitleCell);
}

let myTHead = document.getElementById("list").createTHead();
let myRow0 = myTHead.insertRow();

const tabTitre = ['Nom', 'Prénom', 'Email', 'Supprimer'];

for(let i = 0; i < tabTitre.length; i++) {
    createTitleCell(myRow0, tabTitre[i]);
}

myRow0.setAttribute('style', "font-Weight: bold");

let myBody = document.getElementById("list").createTBody();

for (let i = 0; i < people.length; i++) {

        let tabinfo=people[i].split(" ");

        let ligne = myBody.insertRow();
        ligne.setAttribute('id', i)
        createCell(ligne, tabinfo[1]);
        createCell(ligne, tabinfo[0]);
        createCell(ligne, tabinfo[0].toLowerCase() + "." + tabinfo[1].toLowerCase() + "@example.com");

        let celSuppr = ligne.insertCell();
        celSuppr.textContent = 'X';
        celSuppr.style.fontWeight = 'bold';
        celSuppr.setAttribute('class', i);

        celSuppr.addEventListener("click", supprimer);

        function supprimer() {
            supprimer3(ligne);
        }
}

document.querySelector("#ajouter").addEventListener("click", ajouter);

function ajouter() {
    let affichagePrenom = document.getElementById("prenom").value;
    let affichageNom = document.getElementById("nom").value;

    let myRegexPrenom = /^[a-zA-ZàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇ]+$/.test(document.getElementById("prenom").value);
    let myRegexNom = /^[a-zA-ZàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇ]+$/.test(document.getElementById("nom").value);

if(myRegexPrenom === true && myRegexNom === true && affichagePrenom.length > 1 && affichageNom.length > 1 && people.indexOf(affichagePrenom.toLowerCase() + " " + affichageNom.toLowerCase()) === -1) {

    let li = document.createElement('li');
    li.textContent = document.getElementById("prenom").value + ' ' + document.getElementById("nom").value;
    list.appendChild(li);
    
    document.getElementById("ajout").textContent = affichagePrenom + " " + affichageNom + " ajouté !";
    let index = people.length
    let theRow = document.getElementById('list').insertRow(); /* insertRow(1) les affiches au début du tableau */
    theRow.setAttribute('id', index)
    index++
    theRow.insertCell().textContent = affichagePrenom;
    theRow.insertCell().textContent = affichageNom;
    theRow.insertCell().textContent = affichagePrenom.toLowerCase().normalize("NFD").replace(/[\u0300-\u036f]/g, "") + "." + affichageNom.toLowerCase().normalize("NFD").replace(/[\u0300-\u036f]/g, "") + "@example.com";

    for (i = 0; i < people.length + 1; i++) {
        li.setAttribute('class', i);
        theRow.setAttribute('class', i);
    }

    

    let supprX = theRow.insertCell();

    supprX.addEventListener("click", function(){
        supprimer2(supprX)});

    // supprX.addEventListener("click", function(){
    //         supprimer3()});        

    supprX.textContent = 'X';
    supprX.style.fontWeight = 'bold';

    people.push(affichagePrenom.toLowerCase() + " " + affichageNom.toLowerCase())
}

else if(people.indexOf(affichagePrenom.toLowerCase() + " " + affichageNom.toLowerCase()) !== -1) {
    document.getElementById("ajout").textContent = 'Le nom et le prénom sont déjà présents.'
}

else {
    document.getElementById("ajout").textContent = 'Les saisies ne sont pas valides.'
}
}

function supprimer2(_id) {
    supprimer3(_id.closest('tr'));
}

function supprimer3(_ligne) {
    console.log(_ligne.id)
    _ligne.remove();
    const li = document.querySelectorAll('li')
    for(let elem of li){
        if(elem.className == _ligne.id){
            elem.remove()
        }
    }
}

// function supprimer3() {
    
// }



/* function separerTableau1() {
    retour = [];
    for (const _person of people) {
        retour.push(_person.split(' ').reverse());
    }
    return retour;
}

for (let i = 0; i < 2; i++) {
        createTitleCell(myRow1, separerTableau().reverse()[i+4]);
        createTitleCell(myRow2, separerTableau().reverse()[i+2]);
        createTitleCell(myRow3, separerTableau().reverse()[i]);
    } */

