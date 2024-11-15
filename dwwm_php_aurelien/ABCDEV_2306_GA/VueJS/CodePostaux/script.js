const app = {
    data() {
        return {
            titre: 'Code Postaux',
            saisie: '',
            cities: [],
            resultat : []
        }
    },

    async mounted() {
        let reponse = await fetch('./zipcodes.json');
        this.cities = await reponse.json();
    },

    methods: {
        rechercher() {

            this.resultat = this.cities.filter(property => property.codePostal.startsWith(this.saisie));

            /*for (const property of this.cities) {
                if(property.codePostal.startsWith(this.saisie) === true) {
                    this.resultat.push(property);
                }
            }*/

           // const saisie = document.getElementById('saisie');
          //  const rendu = document.getElementById('rendu');

            

           /* for (const property in this.cities) {
                if(this.cities[property].codePostal.startsWith(this.saisie) === true) {
                rendu.textContent += JSON.stringify(this.cities[property].nomCommune);

                console.log(`${property}: ${JSON.stringify(this.cities[property])}`);
                }
            }*/
        }
    }
}

Vue.createApp(app).mount("#monApp");

