const myEmployee = {
    lastname: "Doe", 
    firstname: "John", 
    birthday: "1981-11-12", 
    salary: 2150
}

document.querySelector("#modification").addEventListener("click", modifier);

function modifier() {
    myEmployee.email = setEmail()

    const tds = document.querySelectorAll('#objet2 td')
    const ths = document.querySelectorAll('#objet th')

        for(let i = 0; i < tds.length; i++){
            tds[i].remove()
            ths[i].remove()
        }

        for (const key in myEmployee) {
        
            let monItem = document.createElement("th");
            let monItem2 = document.createElement("td");

            myEmployee.lastname = document.getElementById('name1').value;
            myEmployee.firstname = document.getElementById('name2').value;
            myEmployee.birthday = document.getElementById('name3').value;
            myEmployee.salary = 2150;
            myEmployee.email = setEmail()
            
            document.getElementById("objet").appendChild(monItem).textContent = key;
            document.getElementById("objet2").appendChild(monItem2).textContent = myEmployee[key];
    }

    console.log(myEmployee)
}

function setEmail(){
    return myEmployee.firstname.toLowerCase().normalize("NFD").replace(/[\u0300-\u036f]/g, "") + "." + myEmployee.lastname.toLowerCase().normalize("NFD").replace(/[\u0300-\u036f]/g, "") + "@example.com";
}