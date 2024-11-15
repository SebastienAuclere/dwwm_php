package bouteille;

public class App {
	
	public static void main(String[] args) {
		
		Bouteille cristalline = new Bouteille(1.25,1.5,false,"Cristalline");

		boolean test1 = cristalline.ouvrir();
		boolean test2 = cristalline.remplir();
	}

}
