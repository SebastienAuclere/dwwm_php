const app = {
    data() {
        return {
            message: 'Saisissez un prénom et un âge',
            compteur: 16,
            bonjour: '',
            phrase: '',
            retraite: '',
            adresses: ["mapremiere adresse","reseidence secondaire" ],
            liste:[ {fruit: "pomme", legume: "brocolis"}, {fruit: "cheesecake", legume: "entrecôte"}]
        }
    },

    methods: {
        valider() {

            if (/^[a-zA-ZàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇ]+$/.test(this.prenom) === true) {
                this.bonjour = 'Bonjour ' + this.prenom

                if (this.compteur < 18) {
                    this.phrase = 'Vous êtes mineur'
                    this.retraite = 'Il vous reste ' + (64 - this.compteur) + ' année(s) avant la retraite'
                }
                else {
                    if (this.compteur < 64) {
                        this.phrase = 'Vous êtes majeur'
                        this.retraite = 'Il vous reste ' + (64 - this.compteur) + ' année(s) avant la retraite'
                    }
                    else if (this.compteur > 64) {
                        this.phrase = 'Vous êtes majeur'
                        this.retraite = 'Vous êtes à la retraite depuis ' + (this.compteur - 64) + ' année(s) avant la retraite'
                    }
                    else {
                        this.retraite = 'Vous prenez votre retraite cette année !'
                    }
                }
            }
            else {
                this.bonjour = 'Bonjour, désolé, le prénom est invalide'
                this.phrase = ''
                this.retraite = ''
            }
        },

        vider() {
            this.bonjour = ''
            this.phrase = ''
            this.retraite = ''
        }
    }
}

Vue.createApp(app).mount('#monApp')