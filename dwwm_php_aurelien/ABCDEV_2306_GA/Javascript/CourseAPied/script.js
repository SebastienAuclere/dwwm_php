let response = await fetch('./resultat10000metres.json');
let data = await response.json();

let minutes = data.sort((a, b) => a.temps - b.temps); // permet de trier par ordre croissant les objects littéraux par rapport au temps (/!\ doit être en dehors de la boucle for)

function total() {
    for (const element in data) {
        let row = document.createElement('tr');
        let monItem1 = document.createElement("td");
        let monItem2 = document.createElement("td");
        let monItem3 = document.createElement("td");
        let monItem4 = document.createElement("td");
        let monItem5 = document.createElement("td");

        document.getElementById("objet2").appendChild(monItem1).textContent = data[element].pays;

        let results = data[element].nom.split(' ');
        document.getElementById("objet2").appendChild(monItem2).textContent = results[0];
        document.getElementById("objet2").appendChild(monItem3).textContent = results[1];


        let time = 0;

        if ((data[element].temps - Math.floor(data[element].temps / 60) * 60) < 10) {
            time = Math.floor(data[element].temps / 60) + "m" + "0" + (data[element].temps - Math.floor(data[element].temps / 60) * 60);
        }
        else {
            time = Math.floor(data[element].temps / 60) + "m" + (data[element].temps - Math.floor(data[element].temps / 60) * 60);
        }

        document.getElementById("objet2").appendChild(monItem4).textContent = time;

        let plus = "+";
        document.getElementById("objet2").appendChild(monItem5).textContent = plus.concat(data[element].temps - data[0].temps + "s") //concat() est nécessaire ici pour éviter de concatener avec "+" même entre guillemets
        // ToFixed() permet d'arrondir à la virgule souhaité
        // toString() est nécessaire ici pour utiliser replace() car data[element].temps est considéré comme un 'int' et non un 'string'

        row.append(monItem1, monItem2, monItem3, monItem4, monItem5);
        document.getElementById("objet2").appendChild(row);
    }
}

total()

/////////////////////

const cochage = document.querySelectorAll('#Allemagne, #Autriche, #Belgique, #Espagne, #France, #Grèce, #Italie, #Pays-Bas, #Pologne, #Portugal');

for (const element of cochage) {
    element.addEventListener("change", cocher);
}
// Le for of est nécessaire pour les querySelectorAll


function cocher() {

    while (document.querySelector('#objet2').children.length > 0) {
        document.querySelector('#objet2').children[0].remove();

    }

    let incr = 0;
    for (const element of cochage) {
        if (element.checked) {
            incr++;
        }
    }

    if (incr > 0) {
        for (let i = 0; i < data.length; i++) {
            if (cochage[i].checked) {

                let row = document.createElement('tr');
                let monItem1 = document.createElement("td");
                let monItem2 = document.createElement("td");
                let monItem3 = document.createElement("td");
                let monItem4 = document.createElement("td");
                let monItem5 = document.createElement("td");

                monItem1.textContent = data[i].pays;

                let results = data[i].nom.split(' ');
                monItem2.textContent = results[0];
                monItem3.textContent = results[1];

                let time = 0;

                if ((data[i].temps - Math.floor(data[i].temps / 60) * 60) < 10) {
                    time = Math.floor(data[i].temps / 60) + "m" + "0" + (data[i].temps - Math.floor(data[i].temps / 60) * 60);
                }
                else {
                    time = Math.floor(data[i].temps / 60) + "m" + (data[i].temps - Math.floor(data[i].temps / 60) * 60);
                }

                document.getElementById("objet2").appendChild(monItem4).textContent = time;

                let plus = "+";
                monItem5.textContent = plus.concat(data[i].temps - data[0].temps + "s")

                row.append(monItem1, monItem2, monItem3, monItem4, monItem5);
                document.getElementById("objet2").appendChild(row);
            }
        }
    }
    else {
        total();
    }
}



/* function cocher() {
        if(this.checked){
            console.log("Check")
        }
        else {
            console.log("Uncheck")
    }
} */