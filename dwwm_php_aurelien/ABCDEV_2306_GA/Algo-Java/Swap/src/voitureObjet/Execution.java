package voitureObjet;

public class Execution {

	public static void main(String[] args) {
		Voiture voiture = new Voiture();
		
		voiture.setMarque("Honda");
		voiture.setPrix(35000);
		voiture.afficher();

	}

}