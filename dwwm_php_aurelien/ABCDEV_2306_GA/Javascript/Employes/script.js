let response = await fetch('./employees.json');
let datas = await response.json();

console.log(datas)

function leTotal() {
        let monItem7 = document.createElement("td"); // total d'éléments
        let monItem8 = document.createElement("td"); // cellule fusionnée (prend la place de 2 cellules)
        monItem8.colSpan = 2;
        let monItem10 = document.createElement("td"); // Total des salaires
        let monItem11 = document.createElement("td"); // cellule fusionnée (prend la place de 2 cellules)
        monItem11.colSpan = 2;

        let objets = document.getElementById("objet2");

        objets.appendChild(monItem7).textContent = datas.data.length;
        objets.appendChild(monItem8).textContent = '';
       // objets.appendChild(monItem9).textContent = '';
    
        let sum = 0;
        
        for (let i = 0; i < datas.data.length; i++ ) {
            sum += datas.data[i].employee_salary;
        }
        
        objets.appendChild(monItem10).textContent = (sum / 12).toFixed(2) + " €";
        objets.appendChild(monItem11).textContent = '';
        //objets.appendChild(monItem12).textContent = '';
}

function generer() {
    
    document.getElementById("objet2").innerHTML = '';

    for (const element of datas.data) {

        let row = document.createElement('tr');


        row.setAttribute('id', 'p' + element.id)

        let monItem1 = document.createElement("td");
        let monItem2 = document.createElement("td");
        let monItem3 = document.createElement("td");
        let monItem4 = document.createElement("td");
        let monItem5 = document.createElement("td");
        let monItem6 = document.createElement("td");

        let objet = document.getElementById("objet2");

        objet.appendChild(monItem1).textContent = element.id;
        objet.appendChild(monItem2).textContent = element.employee_name;

        let lemail = element.employee_name.split(' ');
        objet.appendChild(monItem3).textContent = (lemail[0][0] + "." + lemail[1] + "@email.com").toLowerCase()

        objet.appendChild(monItem4).textContent = (element.employee_salary / 12).toFixed(2) + " €";
        objet.appendChild(monItem5).textContent = 2024 - element.employee_age;

        let buttonDup = document.createElement('button');
        let buttonSup = document.createElement('button');

        buttonDup.classList.add('duplication');
        buttonSup.classList.add('suppression');

        let iconDup = document.createElement('i');
        iconDup.textContent = '';
        iconDup.classList.add('fa');
        iconDup.classList.add('fa-copy');
        buttonDup.appendChild(iconDup);

        let iconSup = document.createElement('i');
        iconSup.textContent = '';
        iconSup.classList.add('fa');
        iconSup.classList.add('fa-trash');
        buttonSup.appendChild(iconSup);

        buttonDup.innerHTML += ' Dupliquer';
        buttonSup.innerHTML += ' Supprimer';

        buttonDup.addEventListener("click", duplicate);
        buttonSup.addEventListener("click", deleteBtn);

               /* buttonSup.addEventListener("click", (_row) => {
            datas.data.splice(datas.data.indexOf(element), 1);
            row.remove();
        }); */

        objet.appendChild(monItem6).appendChild(buttonDup).id = ('d' + element.id);
        objet.appendChild(monItem6).appendChild(buttonSup).id = ('s' + element.id);


        row.append(monItem1, monItem2, monItem3, monItem4, monItem5, monItem6);
        document.getElementById("objet2").appendChild(row);
        
    }
    leTotal();
}

/*
function callNewbutton() {
    for (let n = 0; n < datas.data.length + 1; n++) {
        const btnDup = document.querySelector("#d" + n);

        btnDup.addEventListener("click", duplicate);
    }
}

function callNewbutton2() {
    for (let n = 0; n < datas.data.length + 1; n++) {
        const btnSup = document.querySelectorAll("#s" + n);

        btnSup.forEach((btn) => {
            btn.addEventListener("click", deleteBtn);
        });
    }
}*/

generer();


function duplicate() {

        for (let k = 0; k < datas.data.length; k++) {

            if (parseInt(this.id.replace('d', '')) === (k + 1)) {

                let person = structuredClone(datas.data[k])
                person.id = datas.data.length + 1;// rempalcer par recherche de l'identifiatn el plus élevé + 1
                datas.data.push(person)
                generer();
            }
        }
    }

function deleteBtn() {
    for (let k = 0; k < datas.data.length; k++) {
        if (parseInt(this.id.replace('s', '')) === (datas.data[k].id)) {
            datas.data = datas.data.filter(x => x.id != datas.data[k].id);
            for (let j = 0; j < datas.data.length; j++) {
            if(datas.data[k].id > datas.data.length) {
                datas.data[j].id--;
            }
            else {
                datas.data[j].id = j + 1;
            }
        }
        }
    }
    generer();
}

const haut = document.querySelector("#trihaut");
haut.addEventListener("click", triCroissant);

const bas = document.querySelector("#tribas");
bas.addEventListener("click", triDecroissant);

const doubletri = document.querySelector("#caret");
doubletri.addEventListener("click", triAscdec);

function triCroissant() {
    datas.data.sort(function(a, b){return a.employee_salary-b.employee_salary});
    generer();
}

function triDecroissant() {
    datas.data.sort(function(a, b){return a.employee_salary-b.employee_salary}).reverse();
    generer();
}

let triAsc = true;

function triAscdec() {
    if(triAsc === true) {
        triCroissant();
    }
    else {
        triDecroissant();
    }

    triAsc = !triAsc; // inverse le booleén
}