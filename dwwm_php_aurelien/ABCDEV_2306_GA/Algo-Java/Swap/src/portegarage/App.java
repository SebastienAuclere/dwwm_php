package portegarage;

public class App {
	public static void main(String[] args) {
		
		PorteDeGarage leroyMerlin = new PorteDeGarage("bois", "Leroy Merlin", false, true);
		
		boolean test1 = leroyMerlin.ouvrir();
		boolean test2 = leroyMerlin.deverouiller();
		double test3 = leroyMerlin.partiellementOuverte();
	}
}
