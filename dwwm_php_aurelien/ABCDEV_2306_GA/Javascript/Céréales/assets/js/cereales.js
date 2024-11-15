

export class Cereales {
    /**
     * 
     * @param {*} _id 
     * @param {*} _name 
     * @param {*} _calories 
     * @param {*} _protein 
     * @param {*} _sodium 
     * @param {*} _fiber 
     * @param {*} _carbo 
     * @param {*} _sugars 
     * @param {*} _potass 
     * @param {*} _vitamins 
     * @param {*} _rating 
     */

    constructor(_id, _name, _calories, _protein, _sodium, _fiber, _carbo, _sugars, _potass, _vitamins, _rating) {
        this.id = _id;
        this.name = _name;
        this.calories = _calories;
        this.protein = _protein;
        this.sodium = _sodium;
        this.fiber = _fiber;
        this.carbo = _carbo;
        this.sugars = _sugars;
        this.potass = _potass;
        this.vitamins = _vitamins;
        this.rating = _rating;
        this.ranking = '';
        this.rankingNS();
    }

    rankingNS() {
        let rating = parseInt(this.rating);

        switch (true) {
            case (rating > 80):
                this.ranking = 'A';
                break;
            case (rating > 70 && rating <= 80):
                this.ranking = 'B';
                break;
            case (rating > 55 && rating <= 70):
                this.ranking = 'C';
                break;
            case (rating > 35 && rating <= 55):
                this.ranking = 'D';
                break;
            case (rating < 55):
                this.ranking = 'E';
                break;
        }
    }
}