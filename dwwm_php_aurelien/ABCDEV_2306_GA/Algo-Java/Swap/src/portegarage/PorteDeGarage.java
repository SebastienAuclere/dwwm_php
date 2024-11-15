package portegarage;

import java.util.Scanner;

public class PorteDeGarage {
	Scanner sc = new Scanner(System.in);
	
	private String nomMatiere;
	private String nomMarque;
	private boolean estOuverte;
	private boolean estVerouille;
	
	public PorteDeGarage(){
		System.out.println("Creation d'une porte de garage par defaut");
		
		nomMatiere = "inconnu";
		nomMarque = "inconnu";
		estOuverte = false;
		estVerouille = false;
		
	}
	
	public PorteDeGarage(String _nomMatiere, String _nomMarque, boolean _estOuverte, boolean _estVerouille) {
		
		this.nomMatiere = "bois";
		this.nomMarque = "Leroy Merlin";
		this.estOuverte = true;
		this.estVerouille = false;
		
	}
	
	public boolean ouvrir() {
		if(!this.estOuverte && !this.estVerouille) {
			this.estOuverte = true;
			return true;
		}
		else {
			return false;
		}
	}
	public boolean fermer() {
		if(this.estOuverte) {
			this.estOuverte = false;
			return true;
		}
		else {
			return false;
		}
	}
	
	public boolean verouiller() {
		if(!this.estVerouille) {
			this.estVerouille = true;
			return true;
		}
		else {
			return false;
		}
	}
	
	public boolean deverouiller() {
		if(this.estVerouille) {
			this.estVerouille = false;
			return true;
		}
		else {
			return false;
		}
	}
	public double partiellementOuverte() {
		
		double pourcentageOuverture = 0;
		
		if(!this.estVerouille && this.estOuverte) {
			
			System.out.println("De combien de pourcent voulez-vous ouvrir la porte de garage ?");
			pourcentageOuverture = sc.nextDouble();
			
			if(pourcentageOuverture > 0 && pourcentageOuverture <= 100) {
				
				System.out.println("la porte de garage est ouverte de " + pourcentageOuverture + "%");
			}
		}
			
		else if(this.estVerouille && !this.estOuverte) {
			
			System.out.println("Veuillez d'abord deverouiller la porte");
			
		}
			
		else if(!this.estOuverte && !this.estVerouille) {
			
			System.out.println("Veuillez d'abord ouvrir la porte");
			
		}
		return pourcentageOuverture;
		}
}
