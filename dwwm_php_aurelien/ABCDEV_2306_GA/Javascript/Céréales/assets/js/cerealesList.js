import { Cereales } from "./cereales.js";

export class CerealesList {

    constructor() {
        this.sesCereales = [];
    }

    async createCereals() {
        let json = await this.loadData();
        for (let aCereal of json.data) {
            let newCereal = new Cereales(aCereal.id, aCereal.name, aCereal.calories, aCereal.protein, aCereal.sodium, aCereal.fiber, aCereal.carbo, aCereal.sugars, aCereal.potass, aCereal.vitamins, aCereal.rating);
            this.sesCereales.push(newCereal);
        }
    }

    async loadData() {
        // Récupération du JSON
        let response = await fetch('./assets/data/cereals.json');
        // Conversion du JSON en objet Javascript
        const json = await response.json();

        return json;
    }

    removeCereal(_id) {
        this.sesCereales = this.sesCereales.filter(x => x.id != _id);
    }

    /*    searchCereals(_name) {
            let input = document.getElementById("site-search");
        
            input.addEventListener('keyup', (event) => {
                
                const searchString = event.target.value;
                const filteredCereals = this.sesCereales.filter((letters) => {
                    return letters.name.includes(searchString);
                })
                    console.log(filteredCereals);
                    createRows(filteredCereals);
            })
        } */

    /* static async ultraLoad() {
        // Récupération du JSON
        let response = await fetch('./assets/data/cereals.json');
        // Conversion du JSON en objet Javascript
        const json = await response.json();

        return json.data;
    } */

}