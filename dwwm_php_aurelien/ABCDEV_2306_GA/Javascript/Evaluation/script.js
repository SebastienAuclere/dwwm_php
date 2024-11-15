let response = await fetch('./eval.json');
let data = await response.json();

// 1 et 3

for(const element in data) {

    let row = document.createElement('tr');
    let monItem1 = document.createElement("td");
    let monItem2 = document.createElement("td");
    let monItem3 = document.createElement("td");
    let results = (data[element].fullname.split(' ').join(' ') + " " + data[element].grade).split(' ');

    let monItem4 = document.createElement("td");
    
    document.getElementById("objet2").appendChild(monItem1).textContent = results[0];
    document.getElementById("objet2").appendChild(monItem2).textContent = results[1];
    document.getElementById("objet2").appendChild(monItem3).textContent = results[2];

    if(data[element].grade >= 12) {
        document.getElementById("objet3").appendChild(monItem4).textContent = "Oui";
    }
    else {
        document.getElementById("objet3").appendChild(monItem4).textContent = "Non";
    }

    row.append(monItem1, monItem2, monItem3, monItem4);
    document.getElementById("objet2").appendChild(row);
}

// 2

let average = 0;
let j = 0;

for (let i = 0; i < data.length; i++ ) {
    average += data[i].grade;
    document.getElementById("nbetudiant").textContent = "Nombre d'étudiants : " + (i + 1);
    document.getElementById("moyenneetudiant").textContent = "Moyenne des notes des étudiants : " + average/(i + 1);

    if(data[i].grade <= average/(i+1)) {
        j++;
    }

    document.getElementById("endessousmoyenne").textContent = "Nombre d'étudiants en dessous de la moyenne : " + j;
}

//4

const ajout = document.querySelector("#ajouter");
ajout.addEventListener("click", ajouter);

function ajouter() {

    let nomprenom = document.getElementById('prenom').value;
    let lastname = nomprenom.split(' ')[0];
    let firstname = nomprenom.split(' ')[1];

    let note = document.getElementById('note').value;

    let row = document.createElement('tr');
    let monItem5 = document.createElement("td");
    let monItem6 = document.createElement("td");
    let monItem7 = document.createElement("td");

    document.getElementById("objet2").appendChild(monItem5).textContent = lastname;
    document.getElementById("objet2").appendChild(monItem6).textContent = firstname;
    document.getElementById("objet2").appendChild(monItem7).textContent = note;

    let monItem8 = document.createElement("td");

    let adddata = {fullname: nomprenom, grade: parseInt(note)}
    data.push(adddata);

    for(const element in data) {
    if(data[element].grade >= 12) {
        document.getElementById("objet3").appendChild(monItem8).textContent = "Oui";
    }
    else {
        document.getElementById("objet3").appendChild(monItem8).textContent = "Non";
    }
}

    row.append(monItem5, monItem6, monItem7, monItem8);
    document.getElementById("objet2").appendChild(row);

let average = 0;
let j = 0;

for (let i = 0; i < data.length; i++ ) {
    average += data[i].grade;
    document.getElementById("nbetudiant").textContent = "Nombre d'étudiants : " + (i + 1);
    document.getElementById("moyenneetudiant").textContent = "Moyenne des notes des étudiants : " + average/(i + 1);

    if(data[i].grade <= average/(i+1)) {
        j++;
    }

    document.getElementById("endessousmoyenne").textContent = "Nombre d'étudiants en dessous de la moyenne : " + j;
}
}