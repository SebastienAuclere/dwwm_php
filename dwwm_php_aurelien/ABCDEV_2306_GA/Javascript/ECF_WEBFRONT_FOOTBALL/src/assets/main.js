/* Football APP Starter Kit */

let response = await fetch('./tournoi/football.json');
let data = await response.json();

document.getElementById("nbEquipe").textContent = data[0].team1.length;
document.getElementById("nbMatch").textContent = data.length;

document.getElementById("site-search").placeholder = "Nom d'équipe";

function genererTableau() {
    for (const element of data) {
        let row = document.createElement('tr');

        let colonne1 = document.createElement("td");
        let colonne2 = document.createElement("td");
        let colonne3 = document.createElement("td");
        let colonne5 = document.createElement("td");

        let leTableau = document.getElementById("createTab");

        leTableau.appendChild(colonne1).textContent = element.team1;
        leTableau.appendChild(colonne2).textContent = element.team2;
        leTableau.appendChild(colonne3).textContent = element.score[0];
        leTableau.appendChild(colonne5).textContent = element.score[1];

        let colonne4 = document.createElement("td");

        if (element.score[0][0] > element.score[0][2]) {
            leTableau.appendChild(colonne4).textContent = element.team1;
        }

        else if (element.score[0][2] > element.score[0][0]) {
            leTableau.appendChild(colonne4).textContent = element.team2;
        }

        else {
            leTableau.appendChild(colonne4).textContent = "égalité";
        }

        let colonne6 = document.createElement("td");

        if (element.score[1][0] > element.score[1][2]) {
            leTableau.appendChild(colonne6).textContent = element.team1;
        }

        else if (element.score[1][2] > element.score[1][0]) {
            leTableau.appendChild(colonne6).textContent = element.team2;
        }

        else {
            leTableau.appendChild(colonne6).textContent = "égalité";
        }


        row.append(colonne1, colonne2, colonne3, colonne4, colonne5, colonne6);
        document.getElementById("createTab").appendChild(row);

    }
}

function searchMatch() {
    let input = document.getElementById("site-search");

    input.addEventListener('keyup', (event) => {

        let leTableau = document.getElementById('createTab');
        leTableau.innerHTML = '';
        const searchString = event.target.value.toLowerCase();

        for (let i = 0; i < data.length; i++) {
            if (data[i].team1.toLowerCase().includes(searchString) || data[i].team2.toLowerCase().includes(searchString)) {
                let row = document.createElement('tr');

                let colonne1 = document.createElement("td");
                let colonne2 = document.createElement("td");
                let colonne3 = document.createElement("td");
                let colonne5 = document.createElement("td");

                let leTableau = document.getElementById("createTab");

                leTableau.appendChild(colonne1).textContent = data[i].team1;
                leTableau.appendChild(colonne2).textContent = data[i].team2;
                leTableau.appendChild(colonne3).textContent = data[i].score[0];
                leTableau.appendChild(colonne5).textContent = data[i].score[1];

                let colonne4 = document.createElement("td");

                if (data[i].score[0][0] > data[i].score[0][2]) {
                    leTableau.appendChild(colonne4).textContent = data[i].team1;
                }

                else if (data[i].score[0][2] > data[i].score[0][0]) {
                    leTableau.appendChild(colonne4).textContent = data[i].team2;
                }

                else {
                    leTableau.appendChild(colonne4).textContent = "égalité";
                }

                let colonne6 = document.createElement("td");

                if (data[i].score[1][0] > data[i].score[1][2]) {
                    leTableau.appendChild(colonne6).textContent = data[i].team1;
                }

                else if (data[i].score[1][2] > data[i].score[1][0]) {
                    leTableau.appendChild(colonne6).textContent = data[i].team2;
                }

                else {
                    leTableau.appendChild(colonne6).textContent = "égalité";
                }


                row.append(colonne1, colonne2, colonne3, colonne4, colonne5, colonne6);
                document.getElementById("createTab").appendChild(row);

            }
        }
    })
}

genererTableau();
searchMatch();