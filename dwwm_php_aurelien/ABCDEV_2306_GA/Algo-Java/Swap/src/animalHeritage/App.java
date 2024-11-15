package animalHeritage;

public class App {

	public static void main(String[] args) {
		
		Abeille abeille1 = new Abeille("Apide", "bourdonne", "volant", "nectar", "Abeille");
		Labrador labrador1 = new Labrador("Canide", "aboient", "marchent", "patee", "Chien", "Labrador", "Pinscher");
		ChevalGirafe chevalgirafe1 =  new ChevalGirafe("Mammifere Herbivore", "machent avec ses dents", "marchant a quatre pattes", "vert", "Cheval/Girafe", "Cheval", "Girafe");

		
		abeille1.afficherTout();
		labrador1.afficherTout();
		chevalgirafe1.afficherTout();
		
	}

}
