import { CerealesList } from "./cerealesList.js";

let collectionDeCereales = new CerealesList();
await collectionDeCereales.createCereals()

function createCell(data) {
    const td = document.createElement('td');
    td.textContent = data
    return td;
}

function createOneRow(aCereal) {
    const tr = document.createElement('tr');

    tr.appendChild(createCell(aCereal.id));
    tr.appendChild(createCell(aCereal.name));
    tr.appendChild(createCell(aCereal.calories));
    tr.appendChild(createCell(aCereal.protein));
    tr.appendChild(createCell(aCereal.sodium));
    tr.appendChild(createCell(aCereal.fiber));
    tr.appendChild(createCell(aCereal.carbo));
    tr.appendChild(createCell(aCereal.sugars));
    tr.appendChild(createCell(aCereal.potass));
    tr.appendChild(createCell(aCereal.vitamins));
    tr.appendChild(createCell(aCereal.rating));
    tr.appendChild(createCell(aCereal.ranking));
    return tr;
}

function createButton(aCereal) {
    const lebutton = document.createElement('button')
    // TODO : ajouter l'évènement ici
    lebutton.addEventListener('click', () => {
        console.log(aCereal)
        collectionDeCereales.removeCereal(aCereal.id)
        createRows()
    })
    lebutton.setAttribute('class', 'bouton')
    lebutton.appendChild(createCell('X'))
    return lebutton
}

function createRows() {
    let tbody = document.getElementById('Table');
    tbody.innerHTML = '';

    for (let aCereal of collectionDeCereales.sesCereales) {
        tbody.appendChild(createOneRow(aCereal)).appendChild(createButton(aCereal));
    }
}

function searchCereals() {
    let input = document.getElementById("site-search");

    input.addEventListener('keyup', (event) => {

        if (event.target.value.length > 1) {
            let tbody = document.getElementById('Table');
            tbody.innerHTML = '';
            const searchString = event.target.value.toLowerCase();
            const filteredCereals = collectionDeCereales.sesCereales.filter((letters) => {
                return letters.name.toLowerCase().includes(searchString)
            })

            for (let aCereal of filteredCereals) {
                tbody.appendChild(createOneRow(aCereal)).appendChild(createButton(aCereal));
            }
        }
    })

}

function getLetters() {
    const tableLetter = [];

    for (let i = 0; i < 5; i++) {
        let letter = document.getElementById("I" + i).textContent
        tableLetter.push(letter)
    }
    return tableLetter
}


function filterCereals(theLetter, checkbox) {
    const cerealLetter = collectionDeCereales.sesCereales.filter((rank) => rank.ranking === theLetter)
    if(checkbox.checked) {
        for(let cereal of cerealLetter) {
            chosen.push(cereal)
        }
    }
    else {
        chosen = chosen.filter(rank => rank.ranking !== theLetter)
    }
}

let chosen = [];
const letters = getLetters();

function sortCereals() {
    for (let i = 0; i < letters.length; i++) {
        let checkboxLetters = document.getElementById(letters[i]);

        checkboxLetters.addEventListener('change', function (event) {
            filterCereals(letters[i], event.target)
            displayCereals();
        })
    }
}

function displayCereals() {
    let tbody = document.getElementById('Table');
    tbody.innerHTML = '';

    for (let aCereal of chosen) {
        tbody.appendChild(createOneRow(aCereal)).appendChild(createButton(aCereal));
    }
}

sortCereals();
createRows();