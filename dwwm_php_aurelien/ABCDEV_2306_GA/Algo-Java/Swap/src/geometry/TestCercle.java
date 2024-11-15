package geometry;

public class TestCercle {
	
	public static void main(String[] args) {
	
	Cercle cercle = new Cercle(5,6,7); // Cercle(Rayon, Position Abscisse du centre du rayon, Position Ordonne du centre du rayon)
									   // Pour modifier position du point voir classe Cercle
	cercle.testAppartenance();
	cercle.afficher();
	
	}
}
