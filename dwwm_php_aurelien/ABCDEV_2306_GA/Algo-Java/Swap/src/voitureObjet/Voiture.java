package voitureObjet;

import java.util.Scanner;

public class Voiture {
	Scanner sc = new Scanner(System.in);
	
	private String marque;
	private double prix;
	
	public Voiture() {
		
		marque = "inconnu"; // Creation d'un constructeur par défaut
		prix = 0;
		
	}
	
	public String getMarque() {
		return this.marque;
	}
	
	public double getPrix() {
		return this.prix;
	}
	
	public void setMarque(String _marque) {
		this.marque = _marque;
	}
	
	public void setPrix(double _prix) {
		this.prix = _prix;
	}
	
	public void afficher() {
		System.out.println("La marque de la voiture est : " + this.marque + ", son prix est : " + this.prix);
	}
}
