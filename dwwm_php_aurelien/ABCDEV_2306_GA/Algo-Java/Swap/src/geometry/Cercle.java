package geometry;

import java.util.Scanner;

public class Cercle {

	Scanner sc = new Scanner(System.in);
	
	Point centre = new Point(3,3); //Point(Position Abscisse du point, Position Ordonne du point)
	
	double rayon;
	double centreCercleAbscisse;
	double centreCercleOrdonne;
	double appartenance;
	
	public Cercle() {
		
		System.out.println("Creation d'un cercle par defaut");
		
		rayon = 0;
		centreCercleAbscisse = 0;
		centreCercleOrdonne = 0;
		
	}
	
	public Cercle(double _rayon, double _centreCercleAbscisse, double  _centreCercleOrdonne) {
		
		rayon = _rayon;
		centreCercleAbscisse = _centreCercleAbscisse;
		centreCercleOrdonne = _centreCercleOrdonne;
	
	}
	
	public double perimetre() {
		
		 double perimetre = 2*Math.PI*this.rayon;
		return perimetre;
		
	}
	
	public double surface() {
		
		 double surface = Math.PI*Math.pow(this.rayon, 2);
		return surface;
		
	}
	
	public void testAppartenance() {
		
		appartenance = Math.sqrt(Math.pow(centre.abscisse - this.centreCercleAbscisse, 2) + Math.pow(centre.ordonne - this.centreCercleOrdonne, 2));
		System.out.println("Coordonnes point : (" + centre.abscisse + "," + centre.ordonne + ") \n" + "Coordonnes centre rayon : (" + this.centreCercleAbscisse + "," + this.centreCercleOrdonne + ")\n" + "Rayon : " + this.rayon);
		
		if(appartenance < this.rayon) {
			System.out.println("Le point est dans le cercle");
		}else if (appartenance == this.rayon){
			System.out.println("Le point est sur la bordure du cercle");
		}else {
			System.out.println("Le point est n'est pas dans le cercle");
		}
	}
	
	public void afficher() {
		System.out.print("Le perimetre vaut : " + perimetre() + ", la surface vaut : " + surface());
		
	}
}
