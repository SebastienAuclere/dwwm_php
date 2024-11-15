const app = {
    data() {
        return {
            message: 'Changer la taille du texte',
            compteur: 16
        }
    },
    methods: {
        augmenter() {
            if(this.compteur > 47) {
                this.compteur = 16;
            }
            else {
                this.compteur++;
            }
            
        },

        diminuer() {
            if(this.compteur < 9) {
                this.compteur = 16;
            }
            else {
                this.compteur--;
            }
            
        }
    }
}

Vue.createApp(app).mount('#monApp')