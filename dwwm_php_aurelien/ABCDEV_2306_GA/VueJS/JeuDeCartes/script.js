const app = {
    data() {
        return {
            cards: [],
        }
    },

    async mounted() {
        let reponse = await fetch('./cardgame.json');
        this.cards = await reponse.json();
    },

    computed: {
        plusJouer() {

            let temp = this.cards[0];

            for (let i = 1; i < this.cards.length; i++) {
                if(this.cards[i].played > temp.played) {
                    temp = this.cards[i]
                }
            }
            return temp;
        },

        ratio() {

            let temp = this.cards[0];

            for (let i = 1; i < this.cards.length; i++) {
                if(this.cards[i].victory/this.cards[i].defeat > temp.victory/temp.defeat) {
                    temp = this.cards[i]
                }
            }
            return temp;
        }
    }
}

Vue.createApp(app).mount("#monApp");